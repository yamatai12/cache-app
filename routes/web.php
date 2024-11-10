<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    Cache::put('key', 'value', $seconds = 60);
    return view('welcome');
});
