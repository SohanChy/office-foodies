<?php
session_start();
 class adminController extends Controller
 {
     function __construct() {

         if(!isset($_SESSION["user"])){
             redirect("/login");
         }

         if($_SESSION["user"]->getRole() != "office_manager"){
             $_SESSION["error"] = "You are not a office admin, you can not access that!";
             redirect("/login");
         }
     }

     function showIndex()
     {
         header('Location: '.'admin/popular');
     }
     function index()
     {
         redirect("admin/popular");
     }

     function order()
     {
         $this->view('office/admin/order',["bidId"=>$_REQUEST["bid_id"]]);
     }

     function finalorder()
     {
         $bidId = $_REQUEST["bid_id"];
         $bkash = $_REQUEST["bkash"];

         $bid = Bid::find($bidId);
         $order = $bid->order();
         $order->data["payment_code"]  = $bkash;
         $order->data["payment_amount"]  = $bid->data["bid_amount"];
         $order->data["delivery_status"]  = 1;
         $order->save();

         $allBids = $order->bids();
         foreach($allBids as $mybid){
             $mybid->data["status"] = 2;
             $mybid->save();
         }

         $mybid->data["status"] = 1;
         $mybid->save();

         redirect("admin/history");
     }

     function placeorder()
     {
         $officeId = $_SESSION['managedOffice']->getId();
         $foodId = $_REQUEST['foodId'];
         $packets = $_REQUEST['packets'];

         $order = new Order();
         $order->data["packets"] = $packets;
         $order->data["food_id"] = $foodId;
         $order->data["office_id"] = $officeId;
         $order->data["delivery_status"] = 0;
         $order->data["date"] = date("Y-m-d");

         $order->save();
         redirect("admin/bids");
     }

     function popular()
     {
         $officeId = $_SESSION['managedOffice']->getId();

         $sql = "select foodlist.name as foodName, lunchrank.votes as votes, foodlist.id as foodId
from lunchrank
INNER JOIN foodlist ON foodlist.id = lunchrank.food_id
where lunchrank.office_id = {$officeId}
ORDER BY votes desc;";
         $results = Connection::getQuery($sql);

         $this->view('office/admin/popular',["lunchRankList"=>$results]);
     }

     function add_user_office()
     {
         $this->view('office/admin/add_user_office');
     }

     function admin()
     {
         $this->view('office/admin/');
     }

     function bids()
     {
         $officeId = $_SESSION['managedOffice']->getId();

         $orders = Order::getActive($officeId);

         $this->view('office/admin/bids',["orders"=>$orders]);
     }

     function change_office_logo()
     {
         $this->view('office/admin/change_office_logo');
     }

     function history()
     {
         $officeId = $_SESSION['managedOffice']->getId();

         $sql = "select orders.date as date, foodlist.name as foodName, orders.payment_amount as amount from orders
inner join foodlist on foodlist.id = orders.food_id
where orders.delivery_status<>0 and office_id={$officeId} order by date desc";
         $results = Connection::getQuery($sql);

         $this->view('office/admin/history',["history"=>$results]);
     }

     function employees(){


         $users = $_SESSION["managedOffice"]->employees();

         $this->view('office/admin/empl',["users"=>$users]);
     }

     function addUser()
     {
         $useremail=$_REQUEST['useremail'];

             $user = User::find($useremail,"email");

             if($user){
                 $user->data["office_id"] = $_SESSION["managedOffice"]->getId();
                 $user->save();
                 redirect("admin/employees");
             }
             else die("User Not found");


         //$this->view('office/admin/history');
     }

 }