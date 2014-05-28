<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration {

	/**
	 * Run the migrations. 
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create ('documents',function($t){ 
         	$t->increments('id');
            $t->string('title',200);
            $t->text('content');
            $t->integer('state');
            $t->dateTime('dateCreated');
            $t->timestamps();

           });

			
	}
// $content,$description, $state,$dateCreated,$tags;
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documents');
	}

}
