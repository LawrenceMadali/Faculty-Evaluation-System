<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeerRaterForm;
use App\Http\Controllers\StudentRaterForm;
use App\Http\Controllers\Admin\DashboardController;

// admin
use App\Http\Controllers\Admin\ManageUserController;

// summary result
use App\Http\Controllers\Admin\SummaryResult\PeerToPeerController;
use App\Http\Controllers\Admin\SummaryResult\StudentEvaluationController;

// Evaluation Page
use App\Http\Controllers\Admin\EvaluationPage\SetPeerEvaluationController;
use App\Http\Controllers\Admin\EvaluationPage\SetStudentEvaluationController;

// ------------------------------ System Management ------------------------------
// manage result
use App\Http\Controllers\Admin\SystemManagement\ManageResultController;

// manage reports
use App\Http\Controllers\Admin\SystemManagement\ManageReports\ManageReportController;
use App\Http\Controllers\Admin\SystemManagement\ManageReports\ReportController;
use App\Http\Controllers\Admin\SystemManagement\ManageReports\AuditTrailController;

// manage questionair
use App\Http\Controllers\Admin\SystemManagement\Questionair\QuestionairController;
use App\Http\Controllers\Admin\SystemManagement\Questionair\PeerToPeerQuestionairController;
use App\Http\Controllers\Admin\SystemManagement\Questionair\StudentQuestionairController;

// manage settings
use App\Http\Controllers\Admin\SystemManagement\ManageSettings\ManageSettingsController;

// manage users
use App\Http\Controllers\Admin\SystemManagement\ManageUsers\InstructorEvaluationDetailsController;
use App\Http\Controllers\Admin\SystemManagement\ManageUsers\ManageAccountController;

Route::get('/', function () {
    return view('welcome');
});

// auth middleware
Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', function (){ return view('home '); })->name('home');

        // -------------------------------------------------- Dashboard --------------------------------------------------
        Route::group(['middleware' => 'dashboard', 'prefix' => 'dashboard'], function () {

            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        });
        // -------------------------------------------------- Set Evaluation --------------------------------------------------
        Route::group(['middleware' => 'setEvaluation', 'prefix' => 'Set Evaluation'], function () {

            Route::get('set-peer-evaluation', [SetPeerEvaluationController::class, 'index'])->name('set-peer-evaluation');

            Route::get('set-student-evaluation', [SetStudentEvaluationController::class, 'index'])->name('set-student-evaluation');

        });
        // -------------------------------------------------- summary result --------------------------------------------------
        Route::group(['middleware' => 'summaryResult', 'prefix' => 'Summary Result'], function () {

            Route::get('peer-to-peer-evaluation-result', [PeerToPeerController::class, 'index'])->name('peer-to-peer-evaluation-result');

            Route::get('student-evaluation-result', [StudentEvaluationController::class, 'index'])->name('student-evaluation-result');

        });

        // -------------------------------------------------- System Management --------------------------------------------------
        Route::prefix('System Management')->group(function () {
            // -------------------------------------------------- manage users --------------------------------------------------
            Route::group(['middleware' => 'accounts', 'prefix' => 'manage-user'], function () {

                Route::get('accounts', [ManageAccountController::class, 'index'])->name('manage-accounts');

            });
            // -------------------------------------------------- manage questionair --------------------------------------------------
            Route::group(['middleware' => 'questionnairs', 'prefix' => 'manage-questionnairs'], function () {

                Route::get('/', [QuestionairController::class, 'index'])->name('questionair');

                Route::get('peer-to-peer-questionair', [PeerToPeerQuestionairController::class, 'index'])->name('prf-questionair');

                Route::get('student-questionair', [StudentQuestionairController::class, 'index'])->name('srf-questionair');

            });
            // -------------------------------------------------- manage report --------------------------------------------------
            Route::get('manage-reports',[ManageReportController::class, 'index'])->name('manage-reports');

            Route::group(['middleware' => 'adminMiddleware'], function () {

                Route::get('audit-trail',[AuditTrailController::class, 'index'])->name('audit-trail');

            });
            Route::group(['middleware' => 'reports'], function () {

                Route::get('/',[ReportController::class, 'index'])->name('report');

            });
            // -------------------------------------------------- Manage results --------------------------------------------------
            Route::group(['middleware'  => 'results', 'prefix' => 'manage-result'], function () {

                   Route::get('/', [ManageResultController::class, 'index'])->name('manage-results');

            });
            // -------------------------------------------------- manage settings --------------------------------------------------
            Route::group(['middleware'  => 'settings', 'prefix' => 'manage-settings'], function () {

                Route::get('/', [ManageSettingsController::class, 'index'])->name('manage-settings');

            });
        });
        // -------------------------------------------------- Middleware for instructor --------------------------------------------------
        Route::group(['middleware' => 'instructorMiddleware', 'prefix' => 'Rating Form'], function () {

            Route::get('peer-rater-form', [PeerRaterForm::class, 'index'])->name('peerRaterForm');

        });
        // -------------------------------------------------- Middleware for student --------------------------------------------------
        Route::group(['middleware' => 'studentMiddleware', 'prefix' => 'Rating Form'], function () {

            Route::get('student-rater-form',  [StudentRaterForm::class, 'index'])->name('studentRaterForm');

        });
});
