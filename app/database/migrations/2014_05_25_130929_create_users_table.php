<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function ($t){
   	  		$t->increments('id');
            $t->string('username',80)->unique;
            $t->string('firstname',80);
            $t->string('lastname',80);
            $t->string('email',80)->unique;
            $t->dateTime('lastlogin');
            $t->timestamps();

		}

			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
