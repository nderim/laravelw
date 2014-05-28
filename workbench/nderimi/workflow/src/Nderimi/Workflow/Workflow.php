<?php namespace Nderimi\Workflow;
//require_once('\MyState.php');

class State 
 {
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

class Transition
{
	var $id,$name,$from,$to,$increment;
     var $stateTransition=array();
     var $stateMap=array(); //numstates*2 matrix stateId and matrix column/row
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
	
}


class Workflow {
 
  var $state,$id,$entity,$version,$revision,$numDocuments,$numTransitions;
  var $states = array();
  var $documents=array();
  var $transitions =array(array());
    

    public function __construct()
   {
   	 $state='initial';
     $numDocuments=0;
     $numStates=0;
   }

//function that creates new document in initial state
public function createDocument($id,$name,$content,$description)
{
   $documents[$this->numDocuments]=new Document;
   $documents[$this->numDocuments]->createNew($id,$name,$content,$description);
   $this->numDocuments++;
   echo 'The document ',$this->numDocuments,' is created succesfully</br>';
}

public function addState(State $s)
{
   $this->states[$s->id] = $s;
}

public function getState($id)
{
  return array_has_key($this->states, $id) ? $this->states[$s->id] : null;
}

public function numStates()
{
   return count($this->states);
}

public function createState($id,$name,$expires)
{
   $states[$this->numStates]=new State($id,$name,$expires);
   $this->numStates++;

}

public function createTransition($id,$from,$to,$increment)
{
   $transitions[$this->$numTransitions]=new Transition;
   $transitions[$this->numTransitions]->createNew($id,$from,$to,$increment);
   $this->numTransitions++;
}

public function getAllStates()
{
   return $this->states;

}

public function getNextStates(State $state)
{
  
   $numNextStates=0;
   for($i=1;i<=$numTransitions;$i++)
   {
   	 if($state->id=$transitions[i]->from)
   	 	$nextStates[$numNextStates]=$states[$transitions[i]->to];
   }
}


public function getNumberOfStates()
{
   
}

 
 /*public function getState()
  {
     $a[0]=new State(1,'23','43');  	
  	 $states[0]='my value';
  	 $states[1]='my value';
  	 $states[2]='my value';
     $a[0]->setId(7);
     return $a[0]->id;
      
     //return strlen($this->state);
  }*/ 
}

 $theWorkflow=new Workflow;
 


 class Wind{
 	var $workflows=array();
    var $numWorkflows;
 }

?>
