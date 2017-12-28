<?php
session_start();
class userController extends Controller
{
    function __construct() {
        if(!isset($_SESSION["user"])){
            redirect("/login");
        }
        if($_SESSION["user"]->getRole() != "user"){
            $_SESSION["error"] = "You are not a user, you can not access that!";
            redirect("/login");
        }
    }

    function showIndex()
    {
        header('Location: '.'user/index');
    }

    function vote()
    {
        $Rid = $_REQUEST["lr"];
        $LR = LunchRank::find($Rid);
        $vtoday = $_SESSION["user"]->data["voted_today"];

        if($LR->getId() != $vtoday){
            $LR->data["votes"] = intval($LR->data["votes"]) + 1;

            $oldLR = LunchRank::find($vtoday);
            if($oldLR){
                $oldLR->data["votes"] = intval($LR->data["votes"]) - 1;
                $oldLR->save();
            }

            $_SESSION["user"]->data["voted_today"] = $LR->getId();
        }
        else {
            $LR->data["votes"] = intval($LR->data["votes"]) - 1;
            $_SESSION["user"]->data["voted_today"] = null;
        }

        $_SESSION["user"]->save();
        $_SESSION["user"]= $_SESSION["user"];

        $LR->save();
        redirect("user/index");

    }


    function index()
    {
        $sql = "select lunchrank.votes as votes, lunchrank.id as lunchRankId , foodlist.name as foodName, users.name as suggesterName
from lunchrank
inner join foodlist
  on foodlist.id = lunchrank.food_id
inner join users
  on users.id = lunchrank.suggester_id
where lunchrank.office_id = {$_SESSION['user']->data['office_id']}
order by lunchrank.votes desc";

        $results = Connection::getQuery($sql);

        $this->view('office/user/today',["lunchRank"=>$results]);
    }




    function suggestion()
    {
        $foodList = FoodList::getAll();
        $this->view('office/user/suggest',['fList'=>$foodList]);

    }


    function popular()
    {
        $sql = "select lunchrank.votes as votes, lunchrank.id as lunchRankId , foodlist.name as foodName
from lunchrank
inner join foodlist
  on foodlist.id = lunchrank.food_id
where lunchrank.office_id = {$_SESSION['user']->data['office_id']}
order by lunchrank.votes desc limit 5";

        $results = Connection::getQuery($sql);

        $this->view('office/user/popular',["popularList"=>$results]);
    }




    function myNewSuggestion()
    {

        $mysuggestedfood=$_REQUEST['mysuggestedfood'];
        echo $mysuggestedfood;
      /*
        if(!$this->foodExistMyOffice( $mysuggestedfood,$this->myId() ));
        {
            $this->suggestNewFood($mysuggestedfood);
        }
        else
        {
            echo "this food is already exist in your office";
        }
        */
       // $this->view('office/user/popular',[]);
    }

    function myVote()
    {
        $id = $_REQUEST['menu'];

        $lr = new LunchRank();
        $lr->data["food_id"] = $id;
        $lr->data["office_id"] = $_SESSION["user"]->data["office_id"];
        $lr->data["votes"] = 0;
        $lr->data["suggester_id"] = $_SESSION["user"]->getId();
        $lr->data["date"] = date("D M Y");

        $lr->save();

        redirect("user/index");
    }
}