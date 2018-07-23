<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{

    /** Главная страница клиента.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        $result =[];
        $categories = Category::all()->toArray();
        $questions = Question::where('questions.published', '=', '1')
                    ->with('answer', 'category')
                    ->get();

        foreach ($questions as $question) {
            $result[$question->category->name][] = $question;
        }

        return view('index', compact('result', 'categories'));
    }

    /** Страница добавления нового вопроса у клиента
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAdd()
    {
        $categories = [];
        $categories = Category::all()->toArray();

        return view('add', compact('categories'));
    }

    /** Сохранить новый вопрос
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdd(Request $request)
    {
        $question = new Question();

        $messages = [
            'inputEmail.required' => 'Введите email!',
            'inputName.required' => 'Введите имя!',
            'textQuestion.required' => 'Введите текст вопроса!',
            'inputEmail.email' => 'Введите email правильно!',
        ];

        $this->validate($request, [
            'textQuestion' => 'required|max:1000',
            'inputName' => 'required',
            'inputEmail' => 'required|email',
        ], $messages);

        $question->question = $request->input('textQuestion');
        $question->category_id = $request->input('inputCategory');
        $question->author = $request->input('inputName');
        $question->author_email = $request->input('inputEmail');

        $question->save();

        return redirect('/');
    }

}