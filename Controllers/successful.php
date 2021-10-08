<?php 

class successful extends controller{

function _construct(){
    parent::__construct();
}

function render(){
    $this->view->render('successful/index');
}

};
?>