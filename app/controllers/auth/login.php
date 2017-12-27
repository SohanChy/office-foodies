<?php
session_start();
class login extends Controller
{
    function index()
    {
       // echo 'Current PHP version: ' . phpversion();
        $this->view('office/login');
    }

    function loginCheck()
    {
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];



        if($username=='habib' && password_hash($password)==password_hash('habib6093'))
        //if($this.checklogin($username,$password))
        {


            if (!isset($_SESSION['username'])) {
                $_SESSION['username'] = $username;
                //$_SESSION['userid']=$this->getUserId(parameter);
                //$_SESSION['role']=$this->getUserRole(parameter);
            }

           // $this->authRoute();

            header('Location: '.'vendor');


        }
        else
        {
            echo "password doesn't match";
            $this->index();
        }
    }



    function logout()
    {
        echo "hello\n";
        echo "destroyed: ".$_SESSION['username'];
        session_unset();
        session_destroy();

        //session_destroy();
        echo "session destroyed: ";
        //header('Location: '.'/home');

    }
}