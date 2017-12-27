<?php
session_start();

class vendorController extends Controller
{

    function __construct() {
        if($_SESSION["user"]->getRole() != "vendor_manager"){
            $_SESSION["error"] = "You are not a vendor admin, you can not access that!";
            redirect("/login");
        }
    }

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
        $vendorId = $_SESSION['managedVendor']->getId();

        $sql = "select
  offices.name as officeName,
  foodlist.name as foodName,
  orders.packets as packetNum,
  order_bid.bid_amount as bidAmount,
  order_bid.status as status
from order_bid
INNER JOIN orders
  ON orders.id = order_bid.order_id
INNER JOIN foodlist
  ON foodlist.id = orders.food_id
INNER JOIN offices
    ON offices.id = orders.office_id
where order_bid.vendor_id={$vendorId}
";

        $results = Connection::getQuery($sql);

        $this->view('office/vendor/bids', [ "myBids" => $results]);
    }


    function deliveries()
    {
        $vendorId = $_SESSION['managedVendor']->getId();

        $sql = "SELECT orders.id as orderId,orders.delivery_status as orderStatus, offices.name as officeName, foodlist.name as foodName, orders.packets as packetNum
FROM orders
  INNER JOIN offices ON orders.office_id=offices.id
  INNER JOIN foodlist ON orders.food_id=foodlist.id
where orders.vendor_id = {$vendorId};";
        $results = Connection::getQuery($sql);

        $this->view('office/vendor/deliveries', ["ordersList"=>$results]);
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
        $orderId = $_REQUEST['orderId'];
        $offerAmount = $_REQUEST['offerAmount'];

        $bid = new Bid();
        $bid->data["order_id"] = $orderId;
        $bid->data["vendor_id"] = $_SESSION['managedVendor']->getId();
        $bid->data["bid_amount"] = floatval($offerAmount);
        $bid->data["status"] = 0;
        $bid->save();

        redirect("vendor/bids");
    }


    function takeorder()
    {
        $orderId = $_REQUEST['orderId'];

        $sql = "SELECT orders.id as orderId, offices.name as officeName, foodlist.name as foodName, orders.packets as packetNum
FROM orders
  INNER JOIN offices ON orders.office_id=offices.id
  INNER JOIN foodlist ON orders.food_id=foodlist.id
where orders.id = {$orderId};";

        $results = Connection::getQuery($sql);


        $this->view('office/vendor/make_offer',["orderData"=>$results[0]]);
    }

}