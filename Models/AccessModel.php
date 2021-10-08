<?php

include_once 'Clientes.php';
include_once 'modelFunctions.php';

class AccessModel extends Model{

    function __construct(){
        parent::__construct();
    }

   public function getByEmail($datos){

        $stmt = new ModelFunctions();
        $email = $datos['email'];
        $results = $stmt->getElement("SELECT * FROM Usuarios WHERE email='$email'");

        if($results != false && $datos['password']==$results['contraseña']){
            session_start();
            $_SESSION['user'] = array("id"=>$results['IdUsuario'],"nombre"=>$results['Nombre']);
            return true;
        }
        else{ return false; }       
    }

}
?>