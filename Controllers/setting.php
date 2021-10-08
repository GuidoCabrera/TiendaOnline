<?php

Class setting extends controller{

    private $IdUser;

    function __construct(){
        parent::__construct();
        session_start();
        if(isset($_SESSION['user']['id'])){
            $this->IdUser = $_SESSION['user']['id'];
        }
        else{
            print_r("ERROR");
        }
    }
     
    function render(){
        $this->GetClients($this->IdUser);
        $this->view->render('Setting/index');
    }

    function GetClients($Id){
          $this->view->user = $this->model->getClient($Id);
     }

    function ChangeData(){

      $array = [];
      $array1 = ['Nombre','Apellido','FechaNacimiento','contraseña'];
      $array2 = ['name','surname','birthday','password'];
      $idUser = $_SESSION['user']['id'];
        
      if($_POST){
       
         foreach($_POST as $clave=>$value){
            
            for($i=0;$i<4;$i++){
               if($clave == $array2[$i]){
                $array += array($array1[$i]=>$value);
               }
            }
         }
          if($this->model->updateData($array,$idUser)){
            
             $this->Message("Se han realizado las modificaciones exitosamente");
            
             echo "<script type='text/javascript'>
                window.location.reload();
             </script>";
           }
          else{
             $this->Message('Ha ocurrido un error al realizar la modificacion, intente nuevamente mas tarde',constant("URL")."main");
          }
         }

       else{ $this->Message('Ha ocurrido un error con la actualizacion de los datos, intente nuevamente mas tarde',constant("URL")."Setting"); }
   }

}
?>