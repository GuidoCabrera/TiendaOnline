<?php

class app{

    function __construct(){

$url= isset($_GET['url']) ? $_GET['url'] :null;
$url= rtrim($url,"/");
$url= explode("/",$url);

 if(empty($url[0])){
     $archivocontroller = "Controllers/main.php";
     require_once $archivocontroller;
     $controller = new main();
     $controller->render();
     return false;
 }

 if($url[0]=="Women"||$url[0]=="Men"||$url[0]=="Accessories"||$url[0]=="Children"){
    $id = $url[0];
    $url[0]="gallery";
}

  $archivocontroller = "Controllers/".$url[0].".php";
    
  if(file_exists($archivocontroller)){

      require_once $archivocontroller;

      if($archivocontroller=="Controllers/gallery.php"){
        $controller = new gallery();
        $controller->identifier($id);
      }
      else{
        $controller = new $url[0];
        $controller->loadModel($url[0]);
      }
      
      $nparam = sizeof($url);
      
      if($nparam>1){
        if($nparam>2){
          $param=[];
          for($i=2;$i<$nparam;$i++){
               array_push($param,$url[$i]);
          }
         $controller->{$url[1]}($param);
        }
        else{
         $controller->{$url[1]}();
        }
      }
      else{ 
        $controller->render();
      }
  }
  //Cierre If "file_exists"

}
}

?>