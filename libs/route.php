<?php


    class route
    {
        function __construct()
        {
            if(isset($_GET['url']))  ///if url is not null
            {
                $url =explode('/', $_GET['url']);
                $controller_name=$url[0];

                $file='controllers/'.$controller_name.'.php';

                if(file_exists($file))
                {
                    require $file;
                    $controller = new $controller_name;
                }
                else
                {
                    require 'controllers/errorhandler.php';
                    $controller_name = 'errorhandler';

                    $controller = new $controller_name;

                }

            }


            else
                echo "first page";

        }
    }