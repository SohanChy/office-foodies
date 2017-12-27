<?php

//require_once("Model.php");
//require_once("User.php");

class Office extends Model
{
    public static function tableName(){
        return "offices";
    }

    public function manager(){
        return User::find($this->data["manager_id"]);
    }


    public function employees(){

        $tn = User::tableName();

        $sql = "SELECT * FROM {$tn} where office_id = {$this->getId()}";

        return User::getCollection($sql);
    }

}
