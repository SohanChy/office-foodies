<?php

class show extends Controller {
    function __construct()
    {
        echo "welcome Show<br>";
    }

    function is($name='')
    {
        $user=$this->model('User');
        $user->name=$name;

        //echo $user->name;
        $this->view('home',['name'=>$user->name]);
    }
}