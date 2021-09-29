<?php

include_once 'Clientes.php';

class recoverPassModel extends model{

function __construct(){
    parent::__construct();
}

function searchEmail($email){
    try{ 
     $query = $this->db->connect();
     $stmt = $query->prepare('SELECT * FROM usuarios WHERE email=:email');
     $stmt->bindParam(':email',$email);
     $stmt->execute();

     $results = $stmt->fetch(PDO::FETCH_ASSOC);

     if($results!=false){
        $user = New Cliente($results['IdUsuario'],$results['Nombre'],$results['Apellido'],$results['contraseña'],$results['FechaNacimiento'],$results['Email'],$results['IdRol']);
        return $user;
     }
     else{
        return null;
     }
    }

    catch(PDOEXCEPTION $e){
     print_r($e->getMessage());
     return null;
    }
  }

function insertResetPass($token,$id){
    try{
      $query = $this->db->connect();
      $stmt = $query->prepare("UPDATE usuarios SET resetcontraseña='$token' WHERE idUsuario=:id");
      $stmt->bindParam(":id",$id);
      $stmt->execute();
      return true;
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
        return false;
    }
}

function searchToken($id,$token){
    session_start();
try{
    $query = $this->db->connect();
    $stmt = $query->prepare("SELECT * FROM usuarios WHERE IdUsuario=:id and resetcontraseña=:token");
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":token",$token);
    $stmt->execute();

    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if($results!=null){
        $_SESSION['user'] = array("id"=>$results['IdUsuario'],"nombre"=>$results['Nombre']);
        return true;
    }
    else{
        return false;
    }
 }
 catch(PDOEXCEPTION $e){
     print_r("ha ocurrido un error: ".$e->getMessage());
     return false;
 }
}

function insertNewPass($pass,$id){
    try{
          $query = $this->db->connect();
          $stmt = $query->prepare("UPDATE usuarios SET contraseña='$pass' WHERE idUsuario='$id'");
          $stmt->execute();
          return true;
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
        return false;
    }
}

function changeResetPass($id){
    try{
        $query = $this->db->connect();
        $stmt = $query->prepare("UPDATE usuarios SET resetcontraseña='' WHERE idUsuario='$id'");
        $stmt->execute();

        return true;
    }
    catch(PDOEXCEPTION $e){
        $e->getMessage();
        return false;
    }
  }

}
?>