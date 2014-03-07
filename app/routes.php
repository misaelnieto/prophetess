<?php



//////////////////////////////////////////////////////////////////////////////
// Routes for autentication system

Route::get('/', array('uses' => 'HomeController@showIndex'));
Route::get('login', array('uses' => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

//////////////////////////////////////////////////////////////////////////////
// Routes for FtpUser CRUD

Route::get(
    'users',
    array('before' => 'auth', 'uses' => 'FTPUsersController@getUsersList')
);
Route::get(
    '/users/edit/{pk}',
    array('before' => 'auth', 'uses' => 'FTPUsersController@editUser')
);
Route::match(
    array('GET', 'POST'),
    '/users/add',
    array('before' => 'auth', 'uses' => 'FTPUsersController@addUser')
);
Route::get(
    '/users/delete/{pk}',
    array('before' => 'auth', 'uses' => 'FTPUsersController@deleteUser')
);

