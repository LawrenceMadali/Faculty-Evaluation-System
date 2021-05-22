<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeerRaterForm;
use App\Http\Controllers\StudentRaterForm;

use App\Http\Controllers\Admin\ImportStudentData;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EvaluatorController;
use App\Http\Controllers\Admin\ManagePeerRaterForm;
use App\Http\Controllers\Admin\ManageUserController;
use App\Http\Controllers\Admin\SummaryResultController;

use App\Http\Controllers\Admin\Questionair\QuestionairController;
use App\Http\Controllers\Admin\Questionair\StudentQuestionairController;
use App\Http\Controllers\Admin\Questionair\PeerToPeerQuestionairController;

use App\Http\Controllers\Admin\SectionProperties\CourseController;
use App\Http\Controllers\Admin\SectionProperties\CollegeController;

use App\Http\Controllers\Admin\SummaryResult\PeerToPeerController;
use App\Http\Controllers\Admin\SummaryResult\StudentEvaluationController;

use App\Http\Controllers\Admin\EvaluationPage\SetPeerEvaluationController;
use App\Http\Controllers\Admin\EvaluationPage\SetStudentEvaluationController;

use App\Http\Controllers\Admin\SectionProperties\SectionPropertiesController;
use App\Http\Controllers\Admin\ManageSettings\ManageSettingsController;

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/home', function (){
        return view('home ');
    })->name('home');

    // middleware for admin
    Route::group(['middleware' => 'adminMiddleware', 'prefix' => 'dashboard'], function () {
        // definitely dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        // sidebar menu
        // Route::get('settings', [SettingController::class, 'index'])->name('settings');
        // Route::get('evaluator', [EvaluatorController::class, 'index'])->name('evaluator');
        Route::get('section', [SectionController::class, 'index'])->name('section');
        // Evaluation Page
        Route::get('set.peer.evaluation', [SetPeerEvaluationController::class, 'index'])->name('set-peer-evaluation');
        Route::get('set.student.evaluation', [SetStudentEvaluationController::class, 'index'])->name('set-student-evaluation');
        // summary result
        Route::prefix('summary.result')->group(function () {
            Route::get('/', [SummaryResultController::class, 'index'])->name('summary.result');
            Route::get('peer.to.peer.evaluation.result', [PeerToPeerController::class, 'index'])->name('peer-to-peer');
            Route::get('student.evaluation.result', [StudentEvaluationController::class, 'index'])->name('student-to-peer');
        });
        // create, edit, update peer rating form
        Route::get('settings/peer.rater.form',[ManagePeerRaterForm::class, 'index'])->name('manage-peer-rater-form');
        // manage questionair
        Route::prefix('questionair')->group(function () {
            Route::get('/', [QuestionairController::class, 'index'])->name('questionair');
            Route::get('peer.to.peer.questionair', [PeerToPeerQuestionairController::class, 'index'])->name('prf-questionair');
            Route::get('student.questionair', [StudentQuestionairController::class, 'index'])->name('srf-questionair');
        });
        // section properties
        Route::prefix('manage-settings')->group(function () {
            Route::get('/', [ManageSettingsController::class, 'index'])->name('manage-settings');
        });
        // importing student data
        Route::get('import.student.data', [ImportStudentData::class, 'index'])->name('import-student-data');
    });

    // middleware for secretary
    Route::group(['middleware' => 'secretaryMiddleware'], function () {
        Route::get('manage.users', [ManageUserController::class, 'index'])->name('manage-users');
    });
    // middleware for instructor
    Route::group(['middleware' => 'instructorMiddleware' ], function () {
        Route::get('peer.rater.form', [PeerRaterForm::class, 'index'])->name('peerRaterForm');
    });
    // middleware for student
    Route::group(['middleware' => 'studentMiddleware'], function () {
        Route::get('student.rater.form',  [StudentRaterForm::class, 'index'])->name('studentRaterForm');
    });
});
Route::get('/', function () {
    return view('welcome');
});
