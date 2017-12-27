<?php

//require_once("Model.php");
//require_once("User.php");

class Vendor extends Model
{
    public static function tableName(){
        return "vendors";
    }

    public function manager(){
        return User::find($this->data["manager_id"]);
    }
}