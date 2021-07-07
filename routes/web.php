<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PeerRaterForm;
use App\Http\Controllers\StudentRaterForm;
use App\Http\Controllers\StudentEvaluationDetailsController;
// admin
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\SummaryResultController;
// summary result
use App\Http\Controllers\Admin\SummaryResult\StudentEvaluationController;
use App\Http\Controllers\Admin\SummaryResult\PeerToPeerController;
use App\Http\Controllers\Admin\SummaryResult\ResultController;
// manage users
use App\Http\Controllers\Admin\ManageUsers\ManageAccountController;
use App\Http\Controllers\Admin\ManageUsers\InstructorEvaluationDetailsController;
// manage report
use App\Http\Controllers\Admin\ManageReports\AuditTrailController;
use App\Http\Controllers\Admin\ManageReports\ManageReportController;
use App\Http\Controllers\Admin\ManageReports\ReportController;
// manage settings
use App\Http\Controllers\Admin\ManageSettings\ManageSettingsController;
// Questionair
use App\Http\Controllers\Admin\Questionair\StudentQuestionairController;
use App\Http\Controllers\Admin\Questionair\PeerToPeerQuestionairController;
use App\Http\Controllers\Admin\Questionair\QuestionairController;
// Evaluation Page
use App\Http\Controllers\Admin\EvaluationPage\SetPeerEvaluationController;
use App\Http\Controllers\Admin\EvaluationPage\SetStudentEvaluationController;

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', function (){ return view('home '); })->name('home');

    // -------------------------------------------------- middleware for admin --------------------------------------------------
    Route::group(['middleware' => 'adminMiddleware', 'prefix' => 'dashboard'], function () {
        // -------------------------------------------------- dashboard --------------------------------------------------
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // -------------------------------------------------- sidebar menu --------------------------------------------------
        Route::get('section', [SectionController::class, 'index'])->name('section');
        // -------------------------------------------------- Evaluation Page --------------------------------------------------
        Route::get('set.peer.evaluation', [SetPeerEvaluationController::class, 'index'])->name('set-peer-evaluation');
        Route::get('set.student.evaluation', [SetStudentEvaluationController::class, 'index'])->name('set-student-evaluation');
        // -------------------------------------------------- summary result --------------------------------------------------
        Route::prefix('summary.result')->group(function () {
            Route::get('/', [SummaryResultController::class, 'index'])->name('summary.result');
            Route::get('peer.to.peer.evaluation.result', [PeerToPeerController::class, 'index'])->name('peer-to-peer');
            Route::get('student.evaluation.result', [StudentEvaluationController::class, 'index'])->name('student-to-peer');
            Route::get('result', [ResultController::class, 'index'])->name('result');
        });
        // -------------------------------------------------- manage questionair --------------------------------------------------
        Route::prefix('questionairs')->group(function () {
            Route::get('/', [QuestionairController::class, 'index'])->name('questionair');
            Route::get('peer.to.peer.questionair', [PeerToPeerQuestionairController::class, 'index'])->name('prf-questionair');
            Route::get('student.questionair', [StudentQuestionairController::class, 'index'])->name('srf-questionair');
        });
        // -------------------------------------------------- section properties --------------------------------------------------
        Route::prefix('manage-settings')->group(function () {
            Route::get('/', [ManageSettingsController::class, 'index'])->name('manage-settings');
        });
    });

    // -------------------------------------------------- middleware for secretary --------------------------------------------------
    Route::group(['middleware' => 'secretaryMiddleware', 'prefix' => 'dashboard'], function () {
        Route::get('manage.users', [ManageUserController::class, 'index'])->name('manage-users');
        Route::get('manage.accounts', [ManageAccountController::class, 'index'])->name('manage-accounts');
        Route::get('manage.instructor.information', [InstructorEvaluationDetailsController::class, 'index'])->name('manage-instructor-information');
        Route::get('manage.student.details', [StudentEvaluationDetailsController::class, 'index'])->name('manage-student-details');
    });
    Route::prefix('evaluation')->group(function () {
        // -------------------------------------------------- Middleware for instructor --------------------------------------------------
        Route::group(['middleware' => 'instructorMiddleware' ], function () {
            Route::get('peer.rater.form', [PeerRaterForm::class, 'index'])->name('peerRaterForm');
        });
        // -------------------------------------------------- Middleware for student --------------------------------------------------
        Route::group(['middleware' => 'studentMiddleware'], function () {
            Route::get('student.rater.form',  [StudentRaterForm::class, 'index'])->name('studentRaterForm');
        });
    });
    // -------------------------------------------------- Manage reports --------------------------------------------------
    Route::prefix('reports')->group(function () {
        Route::get('/',[ReportController::class, 'index'])->name('report');
        Route::get('manage.reports',[ManageReportController::class, 'index'])->name('manage-reports');
        Route::get('audit.trail',[AuditTrailController::class, 'index'])->name('audit-trail');
    });
});

Route::get('/', function () {
    return view('welcome');
});
