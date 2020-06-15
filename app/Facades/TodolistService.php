<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TodolistService extends Facade
{
    protected static function getFacadeAccessor() {
        return 'TodolistService';
    }
}
