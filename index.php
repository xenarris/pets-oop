<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload file
require_once('vendor/autoload.php');

//require file that defines the pet class
require('pet.php');

//Create an instance of the base class
$f3 = Base::instance();

//Define a default route
$f3 -> route('GET /', function() {
    echo "<h1>Hello, Pets!</h1>";

    //Instantiate a pet object
    $pet1 = new Pet();

    //Invoke the eat method
    $pet1->eat();

    $pet1->talk();
    $pet1->sleep();

}
);

//Run fat free
$f3->run();