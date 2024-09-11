<?php

//class hello {
  //  public  static function greeting (){
    //    echo "hello developer";
    //}


//public function __construct(){
  //  self ::greeting();
  //  }
 //}
//hello ::greeting();
//(new hello ())->greeting();
//new hello();

class A {
    function test (){
        echo "method call from  C in A class"; 
    }
}

class B extends  A {

}
class  C extends B{

}
(new B())->test();