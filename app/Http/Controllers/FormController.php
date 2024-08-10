<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;

class FormController extends Controller
{
    public function showGuestQuestionForm()
    {
        return view('guest_question');
    }

    public function submitGuestQuestion(Request $request)
    {
        // التحقق من البيانات
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'question' => 'required|string|max:1000',
        ]);

        // حفظ البيانات في قاعدة البيانات
        Question::create($data);

        return redirect()->route('guest.question')->with('success', 'تم إرسال السؤال بنجاح!');
    }

    public function showCompetitionAnswerForm()
    {
        return view('competition_answer');
    }

    public function submitCompetitionAnswer(Request $request)
    {
        // التحقق من البيانات
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'registration_number' => 'required|string|max:255',
            'answer' => 'required|string|max:1000',
        ]);

        // حفظ البيانات في قاعدة البيانات
        Answer::create($data);

        return redirect()->route('competition.answer')->with('success', 'تم إرسال الإجابة بنجاح!');
    }
}
