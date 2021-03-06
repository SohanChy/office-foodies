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
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];

        /** @var User $user */
        $user = User::find($email,"email");

        if($user){
            if($user->verifyPassword($password)){
                $user->logMeIn();
            }
            else
            {
                $_SESSION['error'] = "Wrong Password";
            }
        }
        else {
            $_SESSION['error'] = "User Not Found";
        }

        $this->index();
    }



    function logout()
    {
        session_unset();
        session_destroy();
        redirect("");
    }
}