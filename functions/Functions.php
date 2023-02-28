<?php 

class Functions{
    public static function view (string $file){
        return Config::VIEWS . '/' . $file . '.php';
    }
    public static function asset (string $file){
        return Config::BASE_URL . '/../asset/' . $file;
    }
    public static function url(string $route){
        return Config::BASE_URL . '?route=' . $route;
    }
}