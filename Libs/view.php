<?php

class view{

 function __construct(){
     //echo "controlador view";
 }

 function render($nombre){
    require 'Views/'.$nombre.'.php';
 }

}




?>