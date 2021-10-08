<?php

 class main extends controller{
     
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('Main/index');
    }

 }
?>