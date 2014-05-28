<?php

use Nderimi\Workflow\Workflow;
use Classes\Statetest\Statetest;
use Classes\wf\Workflow as wf1;
use Classes\wf\State\State;
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



	
Route::get('/test/{id}', function($id){
   
	$m = new MyState();
	$w = new Workflow();
	$w = $m->getWorkflow();

  // Workflow::createDocument(1,'nderim','sdafasd','sdfas');
  // Workflow::createDocument(1,'nderim','sdafasd','sdfas');

});


Route::get('/testcl', function(){
     $test = new Statetest();
	 echo $test->printMe();
	});


Route::get('/test1', function(){
     $m = new MyState();
	 $m->testFunction();
	});

Route::get('/test2', function(){
     $m = new TestingClass();
	 echo $m->saySomething();
	});
Route::get('/test3', function(){
     $m = new wf1\Workflow();
	 $ths=new State();
	 $ths->setId(3);
     echo $ths->getId();
	// echo $m->();
	});
/*
Route::get('document', function()
{
	$title='Document';
	return View::make('Document')->with('title',$title);
});*/
Route::get('document', array('uses'=>'DocumentController@showState'));