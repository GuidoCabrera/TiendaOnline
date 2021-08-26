<?php

class controller{

    function __construct(){
        //echo "controlador base";
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