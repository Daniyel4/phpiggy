<?php


include __DIR__ . "/../src/App/functions.php";


$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();


/*

MVC DESIGN PATTERN


M-Model - This controls database logic, create,read,update and delete data

V-View - This controls logic for the HTML/CSS, 

C-Controller - This controls page logic e.g sending an email or validating a form data, controllers
are represented as classes

TEMPLATE ENGINES - a template engine is a package for generating dynamic HTML, they help us loop
through data conditionally render template and import data into a template

*/
