<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Nderimi\Workflow\Workflow;

class MyState extends Eloquent implements UserInterface, RemindableInterface {

	public function getWorkflow(){
		$w = new Workflow();
        
		//$s1 = new Nderimi\Workflow\Workflow\State('draft', 'Draft', 125464);
		//$w ->addState($s1);

		//$s2 = new State('published', 'Published', 125464);
		//$w ->addState($s2);

		//$t = new Transition('publish', 'Publish', $w->getState('draft'), $s2, $validation);
		//$w ->addTransition($t);

		return $w;
	}

public function testFunction()
{
	 $test = new Classes\Statetest\Statetest();
	  echo $test->printMe();
}



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}