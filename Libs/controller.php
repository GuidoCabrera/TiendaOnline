<?php

class controller{

    function __construct(){
        $this->view = new view();
    }

    function loadModel($model){
         $url = "Models/".$model."Model.php";

         if(file_exists($url)){
             require $url;

             $Modelname = $model."Model";
             $this->model = new $Modelname();
         }
    }

}
?>