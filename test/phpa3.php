<?php

$foods=[
    "Vegetables"=>"carrots,
    tomattoo,
    brocolli,
    asparagus,
    auergin.",


"Fruits"=>"
apples,
banana,
orange,
mango,
graps",

"drinks"=>"water,mojo,milk,juice"
];
foreach($foods as $key=> $food){
  //  echo "$key". "=>"."$food\n";
}
$keys =array_keys($foods);
//print_r($keys);

$foods['drinks']=$foods['drinks']."coffee";
foreach($foods as $key=> $food) {
    echo "$key". "=>". "$food\n";
}
;

echo "<br>";

$fruits ="apple banana, orange";
$a=explode(" ", $fruits);
print_r($a);