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
         $array0 = [];
         $array1 = ['Nombre','Apellido','FechaNacimiento','contraseña'];
         $array2 = ['name','surname','birthday','password'];
         $idUser = $_SESSION['user']['id'];
        
         if($_POST){
       
        foreach($_POST as $clave=>$value){
            
            for($i=0;$i<4;$i++){
               if($clave == $array2[$i]){
                $array += array($array1[$i]=>$value);
                $array0 += array('elemento'.$array1[$i] => $array1[$i]);
               }
            }
        }
        if($this->model->updateData($array,$array0,$idUser)){
            echo "<script type='text/javascript'>
               alert('Se han guardado los cambios correctamente');
            </script>";
            
            echo "<script type='text/javascript'>
               window.location.reload();
            </script>";
         }
        else{
            echo "<script type='text/javascript'>
               alert('Ha ocurrido un error algo realizar el cambio, pruebe nuevamente mas tarde');
               window.location.href='http://192.168.2.102/PHP/ProyectoBootstrap/main';
            </script>";
        }
    }

    else{
        //ERROR
    }

   }

}
?>