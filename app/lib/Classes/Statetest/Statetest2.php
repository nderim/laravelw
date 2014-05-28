<?php namespace Classes\Statetest;
class Statetest2 {

	protected $id,$name;
	public function __construct()
	{
		$this->id =1;
	}
	public function printMe()
	{
		return $this->id;
	}
}