<?php namespace Classes\wf\State;
class State {

   protected $id,$name,$expires;
    /*public function __construct($id,$name,$expires)
   {
       $this->id=$id;
       $this->name=$name;
       $this->expires=$expires;
   }*/
    
  public function setId($id)
   {
       $this->id=$id;
   }
   public function getId()
   {
       return $this->id;
   }
   public function setName($name)
   {
       $this->name=$name;
   }
   public function getName()
   {
       return $this->name;
   }
} 