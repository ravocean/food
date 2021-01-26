<?php
// Husrav Khomidov

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('GET /', function () {
    //echo "My Food page";
    $view = new Template();
    echo $view->render("views/home.html");
});


$f3->run();

