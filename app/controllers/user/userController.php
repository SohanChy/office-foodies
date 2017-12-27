<?php
session_start();
class userController extends Controller
{
    function showIndex()
    {
        header('Location: '.'user/index');
    }


    function index()
    {

        $lunchrank= array
            (
                array("1","Chicken chap","Afif"),
                array("3","Chicken Briyani","habib"),
                array("2","nachos","Sohan"),
                array("4","pizza","Abrar"),
                array("7","Singara","Tonmoy"),

            );

        $mostpopular="Singara";


        $this->view('office/user/today',["lunchrank"=>$lunchrank,"mostpopular"=>$mostpopular,"username"=>$_SESSION['username']]);
    }




    function suggestion()
    {


        $approvedmenu=['pizza','singara','Biriyani','Fuska'];
        $this->view('office/user/suggest',['approvedmenu'=>$approvedmenu,"username"=>$_SESSION['username']]);

    }


    function popular()
    {

        $date=date('Y-m');

        if(isset($_REQUEST['date']))
        {
            $date=$_REQUEST['date'];

        }
        $date=explode('-',$date);
        $year=$date[0];
        $month=$date[1];

        //echo $date;
        echo "month is: ".$month."\n";
        echo "year is: ".$year."\n";
        /*
               // var_dump($_REQUEST);
         */


      //  $popularfoodlist=$this->getPopularFoodList($month,$year);
        $popularfoodlist=array(
            array("pizza",12),
            array("Fuska",18),
            array("Nachos",2),
            array("Biriyani",20),
            array("Singara",1),
        );
        $this->view('office/user/popular',["popularfoodlist"=>$popularfoodlist,"username"=>$_SESSION['username']]);
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
       // $this->view('office/user/popular',["username"=>$_SESSION['username']]);
    }

    function myVote()
    {
        $myvottedfood=$_REQUEST['menu'];
        echo $myvottedfood;
        ///
        /*
        if(!$this->isVotted($myvottedfood))
        {
            $this->voteFood($myvottedfood);
        }
        else
        {
            echo "you already votted this food";
        }
        */
        //$this->view('office/user/popular',["username"=>$_SESSION['username']]);
    }
}