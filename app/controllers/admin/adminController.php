<?php

 class adminController extends Controller
 {
     function showIndex()
     {
         header('Location: '.'admin/popular');
     }
     function index()
     {
         $this->view('office/admin/popular');
     }

     function order()
     {
         $this->view('office/admin/order');
     }

     function popular()
     {
         $this->view('office/admin/popular');
     }

     function add_user_office()
     {
         $this->view('office/admin/add_user_office');
     }

     function admin()
     {
         $this->view('office/admin/admin');
     }

     function bids()
     {
         $this->view('office/admin/bids');
     }

     function change_office_logo()
     {
         $this->view('office/admin/change_office_logo');
     }

     function history()
     {
         $this->view('office/admin/history');
     }

 }