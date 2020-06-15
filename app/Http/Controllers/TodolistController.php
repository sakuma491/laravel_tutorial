<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TodolistRequest;
use App\Todolist;
use TodolistService;

class TodolistController extends Controller
{
    /*
    * Todoリストの一覧画面を表示する。
    */
    public function index() {
        $list = TodolistService::getListByUsername(Auth::user()->username);
        return view('todolist.index', [
            'name' => Auth::user()->name,
            'list' => $list
        ]);
    }
    /*
    * タスクを追加する画面を表示する。
    */
    public function add() {
        return view('todolist.add', [
            'name' => Auth::user()->name
        ]);
    }
    /*
    * タスクを生成して追加する。
    */
    public function createTask(TodolistRequest $request) {
        var_dump($request->status);
        $input = [
            'username' => Auth::user()->username,
            'title' => $request->title,
            'body' => $request->body,
            'status' => $request->status,
            'due_date' => $request->due_date
        ];
        $todolist = new Todolist;
        $todolist->fill($input)->save();
        return redirect('/todolist');
    }
    /*
    * 詳細画面を表示する。
    */
    public function detail(String $id) {
        $task = TodolistService::getTaskById($id);
        return view('todolist.detail', [
            'name' => Auth::user()->name,
            'task' => $task
        ]);
    }
    /*
    * タスクを編集する画面を表示する。
    */
    public function edit(String $id) {
        $task = TodolistService::getTaskById($id);
        return view('todolist.edit', [
            'name' => Auth::user()->name,
            'task' => $task
        ]);
    }
    /*
    * タスクの内容を更新する。
    */
    public function updateTask(TodolistRequest $request) {
        $todolist = Todolist::find($request->id);
        $form = $request->all();
        unset($form['__token']);
        $todolist->fill($form)->save();
        return redirect('/todolist');
    }
    /*
    * タスクを削除する。
    */
    public function delete(String $id) {
        Todolist::find($id)->delete();
        return redirect('/todolist');
    }
}
