<?php

class StaticController{
    public function homepage(){
        $title = 'Home';
        include Functions::view('home.html');
    }
    public function destinations(){
        $title = 'Destinations';
        include Functions::view('destinations.html');
    }
}