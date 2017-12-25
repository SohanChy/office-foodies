<?php
class userController extends Controller
{
    function index()
    {
        $this->view('office/user/today');
    }

    function suggest()
    {
        $this->view('office/user/suggest');
    }


    function popular()
    {
        $this->view('office/user/popular');
    }
}