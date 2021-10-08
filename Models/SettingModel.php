<?php

include_once 'Clientes.php';
include_once 'modelFunctions.php';

  class SettingModel extends Model{

  function __construct(){
       parent::__construct();
   }

   public function getClient($id){
       $stmt = new modelFunctions();
       $result = $stmt->getElement("SELECT * FROM usuarios WHERE IdUsuario = '$id'");

       if($result!=false||$result!=null){
           $client = new Cliente($result["IdUsuario"],$result["Nombre"],$result["Apellido"],$result["contraseña"],$result["FechaNacimiento"],$result["Email"],$result["IdRol"]);
           return $client;
       }
       else{ return null; }
   }

   public function updateData($valores,$id){
   
    $array = ["Nombre","Apellido","contraseña","FechaNacimiento"];
    try{
     $query = $this->db->connect();
 
     foreach($array as $element){
        if(array_key_exists($element,$valores)){
            $valor = $valores[$element];
            $stmt = $query->prepare("UPDATE usuarios SET $element = '$valor' WHERE IdUsuario = :id");
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);        
            $stmt->execute();
        }
     }
     return true;
   }

   catch(PDOEXCEPTION $e){
     print_r($e->getMessage());
     return false;
   }

  }

  }
?>