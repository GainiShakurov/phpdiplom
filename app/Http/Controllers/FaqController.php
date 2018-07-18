<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function getIndex()
    {
        $questions = $categories = $result =[];

        $categories = Category::all()->toArray();

        $questions = Question::where('questions.published', '=', '1')
                    ->with('answer', 'category')
                    ->get();

        foreach ($questions as $question) {
            $result[$question->category->name][] = $question;
        }

        return view('index', compact('result', 'categories'));
    }

    public function getAdd()
    {
        $categories = [];
        $categories = Category::all()->toArray();

        return view('add', compact('categories'));
    }

    public function postAdd(Request $request)
    {
        $question = new Question();
        $question->question = $request->input('textQuestion');
        $question->category_id = $request->input('inputCategory');
        $question->author = $request->input('inputName');

        $question->save();

        return redirect('/');
    }

}