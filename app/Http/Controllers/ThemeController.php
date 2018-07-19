<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Question;

class ThemeController extends Controller
{
    public function getIndex()
    {
        $categories = [];
        $categories = Category::all()->toArray();

        return view('/admin/theme/index', compact('categories'));
    }

    public function getAdd()
    {
        return view('admin/theme/add');
    }

    public function postAdd(Request $request)
    {
        $name = $request->input('inputName');

        $category = new Category();
        $category->name = $name;
        $category->save();

        return redirect('/admin/theme/index');
    }

    public function getDelete($id = 0)
    {
        $category = Category::find((int)$id)->toArray();

        return view('admin/theme/delete', compact('category'));
    }

    public function postDelete($id = 0)
    {
        $category = Category::find((int)$id);
        $questions = Question::where('category_id', '=', $id)->with('answer');
        $category->delete();
        $questions->delete();

        return redirect('/admin/theme/index');
    }

    public function getChange($id = 0)
    {
        $categories = $questions = $result =[];
        $categories = Category::all()->toArray();

        $question = Question::where('id', '=', (int)$id)
            ->with('answer', 'category')
            ->get()->toArray()[0];

        return view('admin/theme/change', compact('categories', 'question'));
    }

    public function postChange($id = 0, Request $request)
    {
        $category_id = $request->input('inputCategory');

        $question = Question::find((int)$id);
        $question->category_id = $category_id;
        $question->save();

        return redirect('/admin/theme/index');

    }

}