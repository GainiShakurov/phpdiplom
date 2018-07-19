<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function getIndex()
    {
        $categories = $questions = $result =[];
        $categories = Category::all()->toArray();

        return view('admin/index', compact('categories'));
    }

    public function postIndex(Request $request)
    {

        $selectedCategory = $request->input('inputCategory');

        $categories = $questions = $result =[];
        $categories = Category::all()->toArray();

        $result = Question::where('category_id', '=', $selectedCategory)
            ->with('answer', 'category')
            ->get();

        return view('admin/index', compact('categories', 'result', 'selectedCategory'));

    }

    public function getEdit($id = 0)
    {
        $question = Question::where('id', '=', (int)$id)
            ->with('answer', 'category')
            ->get()->toArray()[0];

        return view('admin/edit', compact('question'));
    }

    public function postEdit($id = 0, Request $request)
    {
        $questionInput = $request->input('inputQuestion');
        $answerInput = $request->input('inputAnswer');
        $authorInput = $request->input('inputAuthor');

        $question = Question::find((int)$id);
        $question->question = $questionInput;
        $question->author = $authorInput;
        $question->save();

        $answer = Answer::where('question_id', '=', (int)$id)->first();
        $answer->answer = $answerInput;

        $answer->save();

        return redirect('/admin/index');
    }

}