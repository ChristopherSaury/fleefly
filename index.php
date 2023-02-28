<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/functions/Functions.php';

if ($_GET['route']){
    $route = $_GET['route'];
}

switch ($route || empty($route)){

}