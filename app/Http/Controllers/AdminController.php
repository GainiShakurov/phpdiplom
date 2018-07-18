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

        $questions = Question::where('category_id', '=', $selectedCategory)
            ->with('answer', 'category')
            ->get();

        foreach ($questions as $question) {
            $result[] = $question;
        }

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

    public function getEdittheme()
    {
        $categories = $questions = $result =[];
        $categories = Category::all()->toArray();

        return view('admin/edittheme', compact('categories'));
    }

    public function getAddtheme()
    {
        return view('admin/addtheme');
    }

    public function postAddtheme(Request $request)
    {
        $name = $request->input('inputName');

        $category = new Category();
        $category->name = $name;
        $category->save();

        return redirect('/admin/edittheme');
    }

    public function getDeletetheme($id = 0)
    {
        $category = Category::find((int)$id)->toArray();

        return view('admin/deletetheme', compact('category'));
    }
    
    public function postDeletetheme($id = 0)
    {
        $category = Category::find((int)$id);
        $questions = Question::where('category_id', '=', $id)->with('answer');
        $category->delete();
        $questions->delete();

        return redirect('/admin/edittheme');
    }

    public function getAdminlist()
    {

        $admins = [];
        $admins = Users::all()->toArray();

        return view('admin/adminlist', compact('admins'));
    }

    public function getAddadmin()
    {
        return view('admin/addadmin');
    }

    public function postAddadmin(Request $request)
    {
        $name = $request->input('inputName');
        $email = $request->input('inputEmail');
        $password = $request->input('inputPassword');

        $now = Carbon::now()->toDateTimeString();

        $admin = new Users();
        $admin->name = $name;
        $admin->email = $email;
        $admin->password = Hash::make($password);
        $admin->remember_token = str_random(10);
        $admin->created_at = $now;
        $admin->updated_at = $now;
        $admin->save();

        return redirect('/admin/adminlist');
    }

    public function getDeleteadmin($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/deleteadmin', compact('admin'));
    }

    public function postDeleteadmin($id = 0)
    {
        $user = Users::find((int)$id);
        $user->delete();

        return redirect('/admin/adminlist');
    }

    public function getChangepassword($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/changepswd', compact('admin'));
    }

    public function postChangepassword($id = 0, Request $request)
    {
        $password = $request->input('inputPassword');
        $admin = Users::find((int)$id);
        $admin->password = Hash::make($password);
        $admin->save();

        return redirect('/admin/adminlist');
    }

}