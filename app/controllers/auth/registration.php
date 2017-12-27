<?php
session_start();
class registration extends Controller
{
    function userRegistration()
    {
        $this->view('office/registration');
    }

    function vendorRegistration()
    {
        $this->view('office/new_vendor');
    }

    function officeRegistration()
    {
        $this->view('office/new_office');
    }


    function checkRegistrationUser()
    {
       $name=$_REQUEST['name'];
       $email=$_REQUEST['email'];
       $username=$_REQUEST['username'];
       $password=$_REQUEST['password'];
       $confirmpassword=$_REQUEST['confirmpassword'];
/*
        if(!$this->validateUserName($username))
            echo  "username";
        if(!$this->validateName($name))
            echo  "name";
        if(!$this->validatePassword($password))
            echo  "password";
        if(!$this->validateUserName($username))
            echo  "username";

*/
        if($this->validateName($name) && $this->validateEmail($email) && $this->validateUserName($username) && $this->validatePassword($password) && ($password==$confirmpassword) )
       {
               //save to database password should be encrypted
               // $this->save
               header('Location: '.'user');

       }
       else
       {
           echo "informations aren't valid";
           $this->view('office/registration');

       }




    }

    function checkRegistrationVendor()
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $confirmpassword=$_REQUEST['confirmpassword'];
        $vendorname=$_REQUEST['vendorname'];
        $phone=$_REQUEST['phone'];

/*
        if(!$this->validateUserName($username))
            echo  "username";
        if(!$this->validateName($name))
            echo  "name";
        if(!$this->validatePassword($password))
            echo  "password";
        if(!$this->validateUserName($username))
            echo  "username";
        if(!$this->validateUserName($vendorname))
            echo "vendor name ".$vendorname;
        if(!$this->validatePhone($phone))
            echo "phone";*/

        if($this->validateName($name) && $this->validateEmail($email) && $this->validateUserName($username) && $this->validatePassword($password) && $this->validatePhone($phone) && $this->validateUserName($vendorname) && ($password==$confirmpassword))
        {

                //save to database password will encrypted
                header('Location: '.'vendor');

        }
        else
        {
            echo "informations aren't valid";
            $this->view('office/new_vendor');

        }


    }

    function checkRegistrationAdmin()
    {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $confirmpassword=$_REQUEST['confirmpassword'];
        $officename=$_REQUEST['officename'];
        $deliveryaddress=$_REQUEST['deliveryaddress'];
        $phone=$_REQUEST['phone'];
/*
        if(!$this->validateUserName($username))
            echo  "username";
        if(!$this->validateName($name))
            echo  "name";
        if(!$this->validatePassword($password))
            echo  "password";
        if(!$this->validateUserName($username))
            echo  "username";
        if(!$this->validateUserName($officename))
            echo "office name";
        if(!$this->validatePhone($phone))
            echo "phone";
*/
        if($this->validateName($name) && $this->validateEmail($email) && $this->validateUserName($username) && $this->validatePassword($password) && $this->validatePhone($phone) && $this->validateUserName($officename) && ($password==$confirmpassword))
        {

                //save to database password will encrypted
                header('Location: '.'vendor');


        }
        else
        {
            echo "informations aren't valid";
            $this->view('office/new_office');

        }



    }






}
