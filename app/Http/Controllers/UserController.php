<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function getIndex()
    {
        $admins = [];
        $admins = Users::all()->toArray();

        return view('/admin/users/index', compact('admins'));
    }

    public function getAdd()
    {
        return view('admin/users/add');
    }

    public function postAdd(Request $request)
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

        return redirect('/admin/users/index');
    }

    public function getDelete($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/users/delete', compact('admin'));
    }

    public function postDelete($id = 0)
    {
        $user = Users::find((int)$id);
        $user->delete();

        return redirect('/admin/users/index');
    }

    public function getChange($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/users/change', compact('admin'));
    }

    public function postChange($id = 0, Request $request)
    {
        $password = $request->input('inputPassword');
        $admin = Users::find((int)$id);
        $admin->password = Hash::make($password);
        $admin->save();

        return redirect('/admin/users/index');
    }
}