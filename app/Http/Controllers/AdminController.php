<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getIndex(Request $request)
    {
        $categories = Category::all()->toArray();
        $selectedCategory = $request->input('category');

        if ($selectedCategory == null) {
            $selectedCategory = Category::first()->id;
        }

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
        $selectedCategory = $question->category_id;
        $question->question = $questionInput;
        $question->author = $authorInput;
        $question->save();

        $answer = Answer::where('question_id', '=', (int)$id)->first();

        if ($answer === null) {
            $now = Carbon::now()->toDateTimeString();
            $answer = new Answer();
            $answer->answer = $answerInput;
            $answer->question_id = $id;
            $answer->admin_id = Auth::user()->id;
            $answer->created_at = $now;
            $answer->updated_at = $now;
        } else {
            $answer->answer = $answerInput;
        }
        $answer->save();


        return redirect('/admin/index?category='.$selectedCategory);
    }

    public function getDelete($id = 0)
    {
        $question = Question::where('id', '=', (int)$id)
            ->with('answer', 'category')
            ->get()->toArray()[0];

        return view('admin/delete', compact('question'));
    }

    public function postDelete($id = 0)
    {
        $questions = Question::where('id', '=', $id);
        $selectedCategory = $questions->first()->category_id;
        $questions->delete();

        $answer = Answer::where('question_id', '=', (int)$id)->first();
        $answer->delete();

        return redirect('/admin/index?category='.$selectedCategory);
    }

    public function getAnswer($id = 0)
    {
        $question = Question::where('id', '=', (int)$id)
            ->with('answer', 'category')
            ->get()->toArray()[0];

        return view('admin/answer', compact('question'));
    }

    public function postAnswer($id = 0, Request $request)
    {
        $answerInput = $request->input('inputAnswer');
        $authorInput = $request->input('inputAuthor');
        $publishInput = $request->input('inputPublished', 0);

        $question = Question::find((int)$id);
        $selectedCategory = $question->category_id;
        $question->published = ($publishInput == 1)? 1: 0;
        $question->author = $authorInput;
        $question->save();

        $now = Carbon::now()->toDateTimeString();

        $answer = new Answer();
        $answer->answer = $answerInput;
        $answer->question_id = $id;
        $answer->admin_id = Auth::user()->id;
        $answer->created_at = $now;
        $answer->updated_at = $now;
        $answer->save();

        return redirect('/admin/index?category='.$selectedCategory);
    }

    public function getStatus($id = 0, $status)
    {

        $question = Question::find((int)$id);
        $selectedCategory = $question->category_id;
        $question->published = $status;
        $question->save();

        return redirect('/admin/index?category='.$selectedCategory);
    }

    public function getNoAnswered()
    {

        $result = Question::leftJoin('answers', function ($join){
            $join->on('questions.id', '=', 'answers.question_id');
        })
            ->WhereNull('answers.question_id')
            ->orderBy('questions.created_at')
            ->with('answer', 'category')
            ->get(['questions.*']);

        return view('admin/noanswered', compact('result'));
    }


}