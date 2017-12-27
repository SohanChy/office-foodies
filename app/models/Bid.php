<?php
//
//require_once("Model.php");
//require_once("Office.php");
//require_once("FoodList.php");
//require_once("Vendor.php");

class Bid extends Model
{
    public static function tableName(){
        return "order_bid";
    }

    public static $status = ["undecided","won","lost"];

}