<?php

// index.php
// include all the files that are going to be used controllers + models

include_once 'controllers/DefaultController.php';
include_once 'controllers/GreetingController.php';
include_once 'models/Greeting.php';

// SAMPLES:
//
// http://localhost/index.php
//      $action = 'index'
//      $section = ''
//
// http://localhost/index.php?a=&s=gretting     
//       $action='hello'
//       $section='gretting'
//
$action = isset($_GET['a']) ? $_GET['a'] : 'index';
$section = isset($_GET['s']) ? $_GET['s'] : '';

switch($section) {
     case 'greeting':
             $controller = new GreetingController;
             break;
     default:
             $controller = new DefaultController;
}

$controller->run($action);

