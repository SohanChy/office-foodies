<?php

class superadminController extends Controller
{
    function index()
    {
        $this->view('office/superadmin/index');
    }

    function office_list()
    {
        $this->view('office/superadmin/office_list');
    }

    function vendor_list()
    {
        $this->view('office/superadmin/vendor_list');
    }

    function transaction_history()
    {
        $this->view('office/superadmin/transaction_history');
    }
}