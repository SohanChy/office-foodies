<?php

class Controller
{
    public function model($model)
    {
        require_once 'app/models/'.$model.'.php';
        return new $model();
    }

    public function view($view,$data=[])
    {
        require_once 'app/views/'.$view.'.php';
    }


    public function route($controllerPath,$controller,$method,$data=[])
    {
        $file='app/controllers/'.$controllerPath.'/'.$controller.'.php';
        require_once $file;

        if(file_exists($file))
         {
            $controllerObject=new $controller;
            require_once $file;
            call_user_func_array([$controllerObject,$method],$data);
         }

        else
            echo "file not found";
    }
}