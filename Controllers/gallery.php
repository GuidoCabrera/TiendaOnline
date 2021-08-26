<?php

class gallery extends controller{

    function __construct(){
        parent::__construct(); 
    }

    function render(){
        $this->view->render('gallery');
    }

    function identifier($cat){
        $this->view->id=$cat;
    }

    function Imgs($cat){
        $directory = "public/img/".$this->id;
        $dirint = dir($directory);

       while(($archive = $dirint->read()) !== false){
         if(preg_match("/jpg/i",$archive)||preg_match("/png/i",$archive)||preg_match("/gif/i",$archive)){
           ?> <p class="text-white"> <?php echo $directory."/".$archive; ?> </p> <?php
          }
       }
      $dirint->close();
    }

}
?>