<?php

include_once 'Clientes.php';
include_once 'modelFunctions.php';

class recoverPassModel extends model{

function __construct(){
    parent::__construct();
}

function searchEmail($email){

    $stmt = new modelFunctions();
    $results = $stmt->getElement("SELECT * FROM usuarios WHERE email='$email'");

    if($results!=false){
        $user = New Cliente($results['IdUsuario'],$results['Nombre'],$results['Apellido'],$results['contraseña'],$results['FechaNacimiento'],$results['Email'],$results['IdRol']);
        return $user;
    }
    else{ return null; }
    
  }

function insertResetPass($token,$id){
    $stmt = new modelFunctions();
    if($stmt->modify('usuarios','resetcontraseña',$token,'idUsuario',$id)){
        return true;
    }
    else{ return false; }
}

function searchToken($id,$token){
    session_start();
 
    $stmt = new modelFunctions();
    $results = $stmt->getElement("SELECT * FROM usuarios WHERE IdUsuario='$id' and resetcontraseña='$token'");

    if($results!=null){
        $_SESSION['user'] = array("id"=>$results['IdUsuario'],"nombre"=>$results['Nombre']);
        return true;
    }
    else{ return false; }
}

function insertNewPass($pass,$id){
    $stmt = new modelFunctions();
    if($stmt->modify('usuarios','contraseña',$pass,'idUsuario',$id)){
        return true;
    }
    else{ return false; }
}

function changeResetPass($id){
    $stmt = new modelFunctions();
    if($stmt->modify('usuarios','resetcontraseña','','idUsuario',$id)){
        return true;
    }
    else{ return false; }
}

}
?>