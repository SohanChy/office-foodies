<?php
session_start();
class profileController extends Controller
{
    function index()
    {
        /*
        $name=$this->getName();
        $email=$this->getUserEmail();
        $username=$this->getUsername();
        $phone=$this->getPhone();
        */

        $name="Habibur Rahman";
        $email="habibrahman6093@gmail.com";
        $username="habib6093";
        $phone="01765420508";
        $this->view('office/user/profile',["name"=>$name,"email"=>$email,"username"=>$username,"phone"=>$phone]);
    }


    function editProfile()
    {
        echo "edit profile";
    }
}

