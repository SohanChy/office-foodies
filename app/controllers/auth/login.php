<?php

class login extends Controller
{
    function index()
    {
        $this->view('office/login');
    }

    function loginCheck()
    {
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];



        if($username=='habib' && password_hash($password)==password_hash('habib6093'))
        {
            header('Location: '.'admin/popular');
        }
        else
        {
            echo "password doesn't match";
            $this->index();
        }
    }
}