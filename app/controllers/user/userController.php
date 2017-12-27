<?php
class userController extends Controller
{
    function showIndex()
    {
        header('Location: '.'user/index');
    }
    function index()
    {
        $lunchrank= array
            (
                array("1","Chicken chap","Afif"),
                array("3","Chicken Briyani","habib"),
                array("2","nachos","Sohan"),
                array("4","pizza","Abrar"),
                array("7","Singara","Tonmoy"),

            );

        $name="habib";
        $this->view('office/user/today',$lunchrank);
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