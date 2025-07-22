<?php
function greetUser($name) {
    return "Hello, " . $name . "!";
}

echo greetUser("Hassan"); 


$name1 = "Zain";

function sayHello() {
    global $name1;
    echo " Hello, $name1 .<br>";
}

sayHello(); 

function counter() {
    static $count = 0;
    $count++;
    echo $count . "<br>";
}

counter(); 
counter(); 
counter(); 

function counter1() {
    $count = 0;
    $count++;
    echo $count . "<br>";
}

counter1(); 
counter1(); 
counter1(); 


?>
