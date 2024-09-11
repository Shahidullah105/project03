<?php

class Person {
    public $name;
    public $age;
    public $id;
    
    public function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }
     
    public function setID($id){
        $this -> id =$id;
    }

    public function __destruct(){
        if (!empty($this->id)){ echo "<br>";
            echo "\nSaving person";
          
        }
    }

    public function persondetails(){
        echo "person name is {$this -> name} and age is ". $this ->age  ;
    }

    
}

$personOne = new person ("jonh smith", 34 );
$personOne-> persondetails();
$personOne->setID(12);