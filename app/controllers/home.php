<?php

session_start();
require_once(BASE_PATH . "/app/models/User.php");

class home extends Controller {
    function __construct()
    {
        $this->index();
    }

    function index()
    {
        $sql = "SELECT foodlist.name as foodName, count(orders.office_id) as eatnum
from orders
  inner join foodlist on foodlist.id = orders.food_id
group by orders.food_id order by eatnum desc Limit 10;";
        $results = Connection::getQuery($sql);


        $this->view('office/index',
            [
            'listing'=>$results
            ]
        );
    }

}