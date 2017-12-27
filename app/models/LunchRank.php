<?php

//require_once("Model.php");
//require_once("Office.php");
//require_once("FoodList.php");
//require_once("User.php");

class LunchRank extends Model
{
    public static function tableName(){
        return "lunchrank";
    }

    public function food(){
        return FoodList::find($this->data["food_id"]);
    }

    public function office(){
        return Office::find($this->data["office_id"]);
    }

    public function suggester(){
        return User::find($this->data["suggester_id"]);
    }

    public function getVotes(){
        return intval($this->data["votes"]);
    }

    public function addVote(){
        $this->data["votes"] = intval($this->data["votes"]) + 1;
    }
}