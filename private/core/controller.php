<?php

class Controller
{
    public function view($view, $data = array())
    {
        //Check if the page is exist
         extract($data);
        if(file_exists("../private/view/".$view . "View.php"))
        {
            require("../private/view/".$view . "View.php");
        }else{
         require ("../private/view/404View.php");
        }
    }

    public function get_model($model)
    {
        if(file_exists("../private/model/".ucfirst($model)."Model.php")){
            require ("../private/model/".ucfirst($model)."Model.php");
            $model=$model."Model";
            return $model = new $model();


        }
        return false;
    }

    public function redirect($location)
    {
        header("Location:" .ROOT."/".trim($location,"/"));
        die;

    }
}
