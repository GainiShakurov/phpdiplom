<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /** Список всех пользователей
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $admins = [];
        $admins = Users::all()->toArray();

        return view('/admin/users/index', compact('admins'));
    }

    /** Страница добавления администратора
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        return view('admin/users/add');
    }

    /** Сохранение нового администратора
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
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

        Log::info(Auth::user()->name.' создал нового администратора - '.$name);

        return redirect('/admin/users/index');
    }

    /** Страница удаления администратора
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getDelete($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/users/delete', compact('admin'));
    }

    /** Удаление администратора
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postDelete($id = 0)
    {
        $user = Users::find((int)$id);
        $user->delete();

        Log::info(Auth::user()->name.' удалил администратора - '.$user->name);

        return redirect('/admin/users/index');
    }

    /** Страница изменения пароля
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getChange($id = 0)
    {
        $admin = Users::find((int)$id);

        return view('admin/users/change', compact('admin'));
    }

    /** Сохранение нового пароля
     * @param int $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postChange($id = 0, Request $request)
    {
        $password = $request->input('inputPassword');
        $admin = Users::find((int)$id);
        $admin->password = Hash::make($password);
        $admin->save();

        Log::info(Auth::user()->name.' изменил пароль администратора - '.$admin->name);
        return redirect('/admin/users/index');
    }
}