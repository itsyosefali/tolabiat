<?php
// app/Http/Controllers/AnswerController.php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function showAnswers()
    {
        // Fetch all answers from the model
        $answers = Answer::all();

        // Pass data to the view
        return view('show-answers', ['answers' => $answers]);
    }
}
