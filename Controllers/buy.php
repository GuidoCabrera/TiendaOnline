<?php

class buy extends controller {

    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('Buy/index');
    }

    function Article($param=null){

        $my_dir = "./public/img/".$param[0]."/".$param[1];
        
        if(!file_exists($my_dir) && $my_dir!=="./public/img/".$param[0]."/public"){

            $create = mkdir($my_dir,777,false);
         }

         $this->view->cate = $param[0];
         $this->view->img = $param[1];

        $this->render('');
    }
}
?>