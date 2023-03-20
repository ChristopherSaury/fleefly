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
}elseif($route === 'destinations'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->destinations();
}elseif($route === 'tours'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->tours();
}elseif($route === 'about'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->about();
}elseif($route === 'blog'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->blog();
}elseif($route === 'contact'){
    require Config::CONTROLLER_FILE . '/StaticController.php';
    $page = new StaticController;
    $page->contact();
}