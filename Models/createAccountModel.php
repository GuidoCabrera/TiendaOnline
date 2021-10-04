<?php
include_once 'modelFunctions.php';
class createAccountModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){

      session_start();
      $FechaNac = explode("/",$datos['FechaNac']);
      $FechaNac2 = $FechaNac[2]."-".$FechaNac[1]."-".$FechaNac[0];
      $idrol = '2';

      $values = [":nombre",":apellido",":pass",":fechaNac",":email",":idrol"];
      $param = [ucfirst($datos['nombre']),ucfirst($datos['apellido']),$datos['pass'],$FechaNac2,$datos['email'],$idrol];
      $stmt = new modelFunctions();
        if($stmt->insert("INSERT INTO USUARIOS(NOMBRE,APELLIDO,CONTRASEÑA,FECHANACIMIENTO,EMAIL,IDROL) VALUES",$values,$param)){
            return true;
        }
        else{ return false; }
    }

    public function getByEmail($email){

      $query = $this->db->connect();
      $stmt = $query->prepare("SELECT * FROM Usuarios WHERE email='$email'");
      
      try{
          $stmt->execute();
          $results = $stmt->fetch(PDO::FETCH_ASSOC);

          if($results != false && $email != ""){
              $_SESSION['user'] = array("id"=>$results['IdUsuario'],"nombre"=>$results['Nombre']);
              return true;
          }
          else{ return false; }     
      }

      catch(PDOEXCEPTION $e){
        print_r($e->getMessage());
        return false;
      }
    }
    
    public function verifyExistEmail($email){
      $stmt = new modelFunctions();
      $result = $stmt->verifyExist("SELECT * FROM usuarios WHERE Email='$email'");
      if($result){ return true; }
      else{ return false; }
    }
}
?>