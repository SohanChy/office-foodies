<?php

require_once("Model.php");

class User extends Model
{
    public static function tableName(){
        return "users";
    }    

        //Create Example
        // $user = new User();
        // $user->data["name"] = "OKI DOKI";
        // $user->data["age"] = "6";
        // $user->data["bio"] = "lajd;l sl;d jsal;";
        // $user->save();



        //Get All example
        //$users = User::getAll();


        //GET ONE
        // $u = User::find(5);

        //EDIT example
        // $u = User::find(5);
        // $u->data["name"] = "CHANGED";
        // $u->data["age"] = "999";
        // $u->data["bio"] = "Hello World";
        // $u->save();

        // dd($u);


        //DELETE EXAMPLE
        // $u = User::find(5);
        // $u->delete();

    
}