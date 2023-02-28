<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/functions/Functions.php';

if (isset($_GET['route'])){
    $route = $_GET['route'];
}

if(empty($route) || $route === 'home'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->homepage();
}