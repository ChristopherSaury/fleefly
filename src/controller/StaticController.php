<?php

class StaticController{
    public function homepage(){
        $title = 'Home';
        include Functions::view('home.html');
    }
}