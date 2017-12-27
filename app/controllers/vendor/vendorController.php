<?php
session_start();

class vendorController extends Controller
{

    function showIndex()
    {
        header('Location: ' . 'vendor/index');
    }

    function index()
    {
        $sql = "SELECT orders.id as orderId, offices.name as officeName, foodlist.name as foodName, orders.packets as packetNum
FROM orders
  INNER JOIN offices ON orders.office_id=offices.id
  INNER JOIN foodlist ON orders.food_id=foodlist.id
where orders.delivery_status = 0;";
        $results = Connection::getQuery($sql);

        $this->view('office/vendor/index', ["orderList" => $results]);
    }


    function bids()
    {

        $mybidinglist = array(
            array("Datasoft", "pizza", "250", "5000", "Accepted"),
            array("Google", "Fuska", "50", "1200", "Not Accepted"),
            array("Facebook", "Biriyani", "180", "2500", "Other vendor won"),
            array("Southtech", "Nachos", "58", "6000", "Accepted"),
            array("Olivine", "Singara", "10", "50", "Accepted"),
        );

        $this->view('office/vendor/bids', ["vendorname" => $this->vendorname, "mybidinglist" => $mybidinglist]);
    }


    function deliveries()
    {
        $this->view('office/vendor/deliveries', ["vendorname" => $this->vendorname]);
    }


    function top_clients()
    {

        $mytopclient = array(
            array("Datasoft", "pizza", 1),
            array("Google", "Fuska", 10),
            array("Facebook", "Biriyani", 5),
            array("Southtech", "Nachos", 7),
            array("Olivine", "Singara", 3),
        );

        $this->view('office/vendor/top_clients', ["vendorname" => $this->vendorname, "mytopclient" => $mytopclient]);
    }


    function top_items()
    {
        $mytopitems = array(
            array("pizza", 1, "10% cheaper"),
            array("Fuska", 10, "50% cheaper"),
            array("Biriyani", 5, "10% more cost"),
            array("Nachos", 7, "20% cheaper"),
            array("Singara", 3, "10% cheaper"),
        );
        $this->view('office/vendor/top_items', ["vendorname" => $this->vendorname, "mytopitems" => $mytopitems]);
    }


    function makeOffer()
    {

        $this->view('office/vendor/top_items', ["vendorname" => $this->vendorname]);
    }


    function takeOrder()
    {
        $orderid = $_REQUEST['takeorder'];
        echo "order id is: " . $orderid;
        //$this->view('office/vendor/top_items',["vendorname"=>$this->vendorname]);
    }

}