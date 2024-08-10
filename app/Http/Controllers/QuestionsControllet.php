<?php
// app/Http/Controllers/AnswerController.php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsControllet extends Controller
{
    public function showQuestions()
    {
        // Fetch all answers from the model
        $questions = Question::all();

        // Pass data to the view
        return view('show-questions', ['questions' => $questions]);
    }
}
