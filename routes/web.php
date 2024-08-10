<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionsControllet;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('guest_question');
});
// routes/web.php


Route::get('/show-questions', [QuestionsControllet::class, 'showQuestions'])->name('show.questions');
Route::get('/show-answers', [AnswerController::class, 'showAnswers'])->name('show.answers');

Route::get('/guest-question', [FormController::class, 'showGuestQuestionForm'])->name('guest.question');
Route::post('/submit-question', [FormController::class, 'submitGuestQuestion'])->name('submit.question');

Route::get('/competition-answer', [FormController::class, 'showCompetitionAnswerForm'])->name('competition.answer');
Route::post('/submit-answer', [FormController::class, 'submitCompetitionAnswer'])->name('submit.answer');
