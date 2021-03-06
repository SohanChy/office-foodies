<?php

//require_once("Model.php");
//require_once("Office.php");

class User extends Model
{
    public static function tableName(){
        return "users";
    }

    public static $roleList = [
        "user","office_manager","vendor_manager","superadmin"
    ];



//    PHP >= 5.5
    public function setPassword($password){
        $this->data["password"] = password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword($password){
        if (password_verify($password, $this->data["password"])) {
            return true;
        } else {
            return false;
        }
    }

    public function getRole(){
        return $this->data["role"];
    }

    public function office(){
        return Office::find($this->data["office_id"]);
    }

    public static $roleMap = [
        "user" => "user/index",
        "office_manager"=>"admin",
        "vendor_manager"=>"vendor",
        "superadmin"=>"superadmin"
    ];

    public function logMeIn(){
        $_SESSION['user'] = $this;
        $this->roleBasedDataStore();

        redirect(self::$roleMap[$this->getRole()]);
    }

    private function roleBasedDataStore(){
        if($this->getRole() == "office_manager"){
            $managedOffice = Office::find($this->getId(),"manager_id");
            $_SESSION['managedOffice']=$managedOffice;
        }
        else if($this->getRole() == "vendor_manager"){
            $managedVendor = Vendor::find($this->getId(),"manager_id");
            $_SESSION['managedVendor']=$managedVendor;
        }
    }

    public static function registerUser($name,$email,$password,$role,$phone=null){
         $user = new User();
         $user->data["name"] = $name;
         $user->data["email"] = $email;
         $user->data["role"] = $role;
         $user->setPassword($password);
         $user->data["phone"] = $phone;
         $user->save();

         return $user;
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