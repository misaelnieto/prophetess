<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFtpusersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('ftp_users', function($table)
        {
            $table->increments('id');
            $table->string('user_id')->unique();
            $table->string('passwd');
            $table->integer('uid');
            $table->integer('gid');
            $table->string('home_dir');
            $table->string('shell');
            $table->integer('count');
            $table->timestamp('accessed_at');
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ftp_users');
	}

}
