<?php
function greet($message){
    echo "hello " . $message;
}

greet("sabahat ");

class Gretting {

    function greet($message){
        echo "\nhello  " . $message;
    }
}

$gretting = new Gretting();

$gretting->greet("Mr khan ");
