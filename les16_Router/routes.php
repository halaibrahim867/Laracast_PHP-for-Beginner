<?php


$router->define([
    ''=>'controllers/index.php',
    'about' =>'controllers/about.php',
    'about/culture' =>'controllers/about-culture.php',
    'contact'=> 'controllers/contact.php'
]);

  
//or can do another something but they are the same
/*
$router->define('' , 'controllers/index.php');
Route::get('about' , 'controllers/about.php');
*/