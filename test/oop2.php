<?php

//function greet($message ){
  //  echo "Hello ". $message;
//  }
// greet("shahidullah kaisar");

//class Greet{
  //  function greet($message ){
    //    echo "Hello ". $message;
    //}   
//}

//$greeting = 
//(new Greet())->greet("shahidullah kaisar tushar");
//class User {
  //  public $name;

  //  public function setName($newname){
    //    $this->name = $newname;
    // }

    //public function getName(){
     //  echo $this->name;  
    //  } 
//}

//$user1 = new User ();
//$user1->setName("sabahat kaisar");
//$user1->getName();
//class person {
  //  public $name;
   // public $age;
   // public function personName(){
    //    echo  "person name is ". $this -> name;
    //}
    //public function personAge(){
      //  echo "\nPerson age is  ". $this -> age;

    //}
//}
//$personOne = new person ();
//$personOne -> name = "sabahat";
//$personOne -> age -= "03";
//$personOne -> personName();
//$personOne -> personAge();

class fund {

    private $fund;

    public function __construct($initialblance=0){
        $this->fund = $initialblance;
    }
     
    public function addFund ($money){
        $this -> fund += $money;
        echo "<br>";
        echo "Fund added: $" . $this->fund;
    }
      
    
    public function deuctfund ($money){
        $this -> fund -= $money;
        echo "<br>";
        echo "Fund deducted: $" . $money;
    }

    public function getFund(){
        echo "<br>";
        echo "\n Total fund is {$this -> fund} ";
    }
}
$ourFund= new Fund(1000);
$ourFund -> getFund();
$ourFund-> addFund(500);
$ourFund->getFund();
$ourFund->deuctfund(500);
$ourFund->getFund();
//$ourFund->fund=300;
$ourFund->getFund();

