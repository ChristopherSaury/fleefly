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
    public function tours(){
        $title = 'Tours';
        include Functions::view('tours.html');
    }
}