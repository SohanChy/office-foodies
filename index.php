<?php
define( "BASE_PATH", getcwd() );
define( "BASE_URL", "http://localhost/office-foodies");

spl_autoload_register(function ($class_name) {
    require_once "app/models/".$class_name . '.php';
});

require_once 'helpers.php';
require_once 'app/core/init.php';
$n=new App;