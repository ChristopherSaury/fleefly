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
    public function about(){
        $title = 'About Us';
        include Functions::view('about.html');
    }
    public function blog(){
        $title = 'Blog';
        include Functions::view('blog.html');
    }
    public function contact(){
        $title = 'Contact';
        include Functions::view('contact.html');
    }
    public function signup(){
        $title = 'Sign Up';
        include Functions::view('signup.html');
    }
    public function login(){
        $title = 'Login';
        include Functions::view('login.html');
    }
}