<?php
//
//require_once("Model.php");
//require_once("Office.php");
//require_once("FoodList.php");
//require_once("Vendor.php");

class Order extends Model
{
    function __construct() {
        parent::__construct();
        $this->data["date"] = date("Y-m-d");
    }

    public static function tableName(){
        return "orders";
    }

    public static $deliveryStatus = ["open","pending delivery","delivered"];

    public function food(){
        return FoodList::find($this->data["food_id"]);
    }

    public function office(){
        return Office::find($this->data["office_id"]);
    }

    public function bids(){
        return Bid::getAll($this->getId(),"order_id");
    }

    public function vendor(){
        return Vendor::find($this->data["vendor_id"]);
    }

    public static function getActive($officeId){

        $tn = static::tableName();
        $sql = "SELECT * FROM {$tn} where delivery_status = 0 and office_id = {$officeId}";

        return static::getCollection($sql);
    }


}