<?php

class FTPUsersController extends BaseController {

    public function getUsersList () {
        $ftp_users = FTPUser::all();

        return View::make('users')->with('users', $ftp_users);
    }

    public function addUser() {
        // var $user = new User;
        // $user->name = 'John';
        // $user->save();

        return View::make('add_user');
    }

    public function deleteUser () {
        $ftp_user = FTPUser::findOrFail($pk);
        $ftp_user->delete();
        return View::make('remove_user');
    }

    public function editUser () {
        $ftp_user = FTPUser::findOrFail($pk);

        return View::make('edit_user')->with('user', $ftp_user);
    }
}
