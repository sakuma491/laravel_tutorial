<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    protected $fillable = [
        'username', 'title', 'body', 'status', 'due_date'
    ];
}
