<?php
/**
 * Created by PhpStorm.
 * User: habib
 * Date: 12/23/17
 * Time: 9:47 PM
 */
require 'models/post.php';

 class hello{
     function __construct()
     {
         echo "hello there";
         $test=new post;

         $ars=$test->lists();
         $this->view('views/studentlist');

     }


 }
