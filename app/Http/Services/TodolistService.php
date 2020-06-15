<?php
namespace App\Http\Services;

use App\Todolist;
use Illuminate\Support\Carbon;

class TodolistService
{
    /*
    * 特定のユーザーに関連するTodoリストを取得して
    * 日付のフォーマットを変更して返す。
    */
    public function getListByUsername(String $username) {
        $list = Todolist::where('username', $username)->get();
        for($i = 0; $i < count($list); $i++) {
            $datetime = new \DateTime($list[$i]['due_date']);
            $list[$i]['due_date'] = $datetime->format('Y/m/d');
        }
        return $list;
    }
    /*
    * 特定のユーザーに関連した特定のTodoリストの日付を変更して返す。
    */
    public function getTaskById(String $id) {
        $task = Todolist::find($id);
        $dueDate = new \DateTime($task->due_date);
        $task->due_date = $dueDate->format('Y-m-d');
        return $task;
    }
}
