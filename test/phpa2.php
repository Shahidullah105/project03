<?php
function mymessage (){
    echo "i am here";
}

function myage (){
    echo "25";
}

function mycar (){
    echo "volvo";
}
$myarr =array("car"=>"mycar", "age"=>"myage", "message"=>"mymessage");

//foreach($myarr as $x=> $y){
  //  echo "$x => $y\n";
 //}

 $myarr["message"]();
 echo "\n";
 echo "<br>";
 $myarr["age"]();
 echo "\n";
 echo"<br>";
 $myarr["car"]();

 