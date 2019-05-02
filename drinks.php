<?php
//   OOP
class Drinks{
    // Member Variables: Variables defined inside a class
    var $price;
    var $name;

    // Member Functions: Functions defined inside a class
    function setPrice($par){
        $this->price = $par;
    }

    function getPrice(){
        echo $this->price. "<br/>";
    }

    function setName($par){
        $this->name=$par;
    }

    function getName(){
        echo $this->name. "<br/>";
    }
}

// create objects of that class type. here three objects have been created and thes objects are idependent of
// each other and will have their existence seperately.

$wine = new Drinks;
$soda = new Drinks;
$juice = new Drinks;

// call member functions. we will be able to call functions related to that object. one member function will
// be able to process a member variable of related object only

$wine -> setName("Whisky");
$soda -> setName("Stoney");
$juice -> setName("Passion");

$wine -> setPrice(2000);
$soda -> setPrice(3000);
$juice -> setPrice(4000);

// Call another  member functions to get the values set
$wine -> getName();
$soda -> getName();
$juice -> getName();

$wine -> getPrice();
$soda -> getPrice();
$juice -> getPrice();


?>