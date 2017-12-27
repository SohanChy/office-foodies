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
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];


        $errors = [];

        if(!$this->validateEmail($email)){
            $errors[] = "Invalid Email<br>";
        }
        if(!$this->validateName($name)) {
            $errors[] = "Invalid Name<br>";
        }
        if(!$this->validatePassword($password)){
            $errors[] = "Invalid Password<br>";
        }
        if($password != $confirmpassword){
            $errors[] = "Passwords Do Not Match<br>";
        }

        if (count($errors) == 0) {
            User::registerUser($name,$email,$password);
            //save to database password will encrypted

        } else {
            $_SESSION["error"] = implode("\n",$errors);
            $this->view('office/registration');
        }

    }

    function checkRegistrationVendor()
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];
        $vendorname = $_REQUEST['vendorname'];
        $phone = $_REQUEST['phone'];

        if(!$this->validateEmail($email)){
            $errors[] = "Invalid Email<br>";
        }
        if(!$this->validateName($name)) {
            $errors[] = "Invalid Name<br>";
        }
        if(!$this->validatePassword($password)){
            $errors[] = "Invalid Password<br>";
        }
        if(!$this->validatePhone($phone)){
            $errors[] = "Invalid Phone<br>";
        }
        if(!$this->validateUserName($vendorname)){
            $errors[] = "Invalid Vendor Name<br>";
        }
        if($password != $confirmpassword){
            $errors[] = "Passwords Do Not Match<br>";
        }

        if (count($errors) == 0) {

            $user = User::registerUser($name,$email,$password,$phone);

            $vendor = new Vendor();
            $vendor->data["name"] = $vendorname;
            $vendor->data["manager_id"] = $user->getId();
            $vendor->save();

            $user->logMeIn();

        } else {
            $_SESSION["error"] = implode("\n",$errors);
            $this->view('office/new_vendor');
        }


    }

    function checkRegistrationAdmin()
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];
        $officename = $_REQUEST['officename'];
        $deliveryaddress = $_REQUEST['deliveryaddress'];
        $phone = $_REQUEST['phone'];

        if(!$this->validateEmail($email)){
            $errors[] = "Invalid Email<br>";
        }
        if(!$this->validateName($name)) {
            $errors[] = "Invalid Name<br>";
        }
        if(!$this->validatePassword($password)){
            $errors[] = "Invalid Password<br>";
        }
        if(!$this->validatePhone($phone)){
            $errors[] = "Invalid Phone<br>";
        }
        if(!$this->validateUserName($officename)){
            $errors[] = "Invalid Office Name<br>";
        }

        if($password != $confirmpassword){
            $errors[] = "Passwords Do Not Match<br>";
        }

        if (count($errors) == 0) {

            $user = User::registerUser($name,$email,$password,$phone);

            $office = new Office();
            $office->data["name"] = $officename;
            $office->data["manager_id"] = $user->getId();
            $office->save();

            $user->logMeIn();

        } else {
            $_SESSION["error"] = implode("\n",$errors);
            $this->view('office/new_office');
        }


    }


}
