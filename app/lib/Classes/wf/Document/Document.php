<?php namespace Classes\wf\Document;

class Document
{
var $id,$name, $content,$description, $state,$dateCreated,$tags;
	public function __construct()
	{}

	public function getState()
	{
		return $this->state;
	}
	public function setState($state)
	{
		$this->state=$state;
	}
	public function createNew($id,$name,$content,$description)
	{
		$this->id=$id;
		$this->name=$name;
		$this->content=$content;
		$this->description=$description;
	}