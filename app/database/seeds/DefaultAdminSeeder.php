<?php

class DefaultAdminSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Administrator',
            'user_id' => 'admin',
            'email'    => 'admin@example.com',
            'secret' => Hash::make('admin'),
        ));
    }

}