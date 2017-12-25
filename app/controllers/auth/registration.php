<?php

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
}
