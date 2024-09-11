<?php
//$fruits="apple, banana, orange, mango";
//$a = preg_split(" /[\s,]+/", $fruits);
//print_r($a);

// echo "\n";

//$fruits="apple, banana;orange, mango";
//$a = preg_split(" /[, ; |]+/", $fruits);
//print_r($a);
//echo "\n";

//$fruits="apple, banana, orange, mango";
//$a = preg_split("/\s*/", $fruits);
//print_r($a);

//$arr  = array ('hello', 'world', 'beautiful', 'day');
//echo implode(" ", $arr);

//function evenorodd($n){
 //   if ($n%2==0){
   //     return true ;
  //  }
  //  else{
    //    return false;
    //}
//}

//$x=13;
//if (evenorodd($x)){
  //  echo "the number  {$x} is even";
//}
//else {
  //  echo "the number {$x} is odd";
// }

// echo "<br>";
//function sum(){
  //  $a=3;
  //  $b=2;
  //  $c=12;
  //  $sum=$a+$b+$c;
  //  echo "$sum";
//}
//sum();

//function sum(float $a, int $b, int $c){
  //  $sum = $a+$b+$c;
  //  echo "$sum";
  //  }
// sum (6.09,3,12);
function sum(...$numbers){
    $sum = 0;
    for($i=0; $i<count($numbers); $i++){
        $sum+=$numbers[$i];
    }
    echo "$sum";
}
sum (1,2,3,4,5,6,7,8,9,10);
echo "<br>";
function printNumber($n){
    if ($n>100){
        return;
    }
    echo $n." ";
    printNumber($n+1);
}
printNumber(0);
echo"<br>";

function fibonacci($old, $new, $start, $end){
    if ($start>$end){
        return;
    }
    $start++;
    echo "$old ";
    $temp=$old+$new;
    $old= $new;
    $new= $temp;
    fibonacci($old, $new, $start, $end);
}
fibonacci(0, 1, 1, 17);
echo "<br>";

echo date (" F d-m-y");