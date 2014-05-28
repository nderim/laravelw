<?php namespace Classes\wf\Workflow;

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
   $s->setId(1);
   $this->states[0] = $s;
   return $s->getId();
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

