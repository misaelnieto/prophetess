<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    $ftp_users = FTPUser::all();

    return View::make('users')->with('users', $ftp_users);
});

Route::get('/users/add', function()
{
    return View::make('add_user');
});

Route::get('/users/remove/<pk>', function()
{
    return View::make('remove_user');
});

Route::get('/users/edit/<pk>', function()
{
    return View::make('edit_user');
});

