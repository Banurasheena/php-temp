<?php

// A local variable is a variable declared inside a function.
// $x=0 is a local variable
// $x=4 is not a local variable because it is declared outside the function.
$x=4;
function assignx(){
    $x=0;
    echo "\$x inside function is $x", "<br/>";
}



assignx();
echo "\$x outside function is $x", "<br/>";



$text = 'Hello';
$text = 'World';

echo $text, "<br/>";

// Global scope: a variable declared in the main flow of the code

$number=19; //variable with a global scope 
echo $number; //will output 19

function num(){
    echo $number; //number is undefined here
}