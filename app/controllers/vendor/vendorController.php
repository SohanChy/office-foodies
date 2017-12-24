<?php

class vendorController extends Controller
{
    function index()
    {
        $this->view('office/vendor/index');
    }

    function bids()
    {
        $this->view('office/vendor/bids');
    }

    function deliveries()
    {
        $this->view('office/vendor/deliveries');
    }

    function top_clients()
    {
        $this->view('office/vendor/top_clients');
    }

    function top_items()
    {
        $this->view('office/vendor/top_items');
    }
}