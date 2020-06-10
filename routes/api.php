<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("task","TasksController@index");
Route::get("task/{task}","TasksController@show");
Route::post("task","TasksController@store");
Route::patch("task/{task}","TasksController@update");
Route::delete("task/{task}","TasksController@destroy");

    