<?php namespace Classes\wf\Transition;

class Transition
{
	protected $id,$name,$from,$to,$increment;
     protected $stateTransition=array();
     protected $stateMap=array(); //numstates*2 matrix stateId and matrix column/row
     public function __construct()
     {}
     //function that sets availale transitions betwwen states
     public function setTransitons()
     {
     	  $numstates=mt_rand(1,20);//getNumber of states
         for ($i=0;$i<=$numstates;$i++) {
            $stateTransition[$i] = array();
            for($j=0;$j<$numstates;$j++) {
               $stateTransition[$i][$j]=mt_rand(0,1);              
            }
         }
                 
     }
      public function createNew($id,$name,$from,$to,$increment)
      {
      	$this->id=$id;
      	$this->name=$name;
      	$this->from=$from;
      	$this->to=$to;
      	$this->increment=$increment;
      }
   

}