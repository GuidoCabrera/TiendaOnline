<?php

class help extends controller{

 function __construct(){
    parent::__construct();
 }

 function render(){
     $this->view->render('Help/index');
 }

}


?>