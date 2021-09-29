<?php

class createAccountModel extends Model {

    public function __construct(){
        parent::__construct();
    }

    public function insert($datos){

      session_start();
      $FechaNac = explode("/",$datos['FechaNac']);
      $FechaNac2 = $FechaNac[2]."-".$FechaNac[1]."-".$FechaNac[0];
      $idrol = '2';

      try{
        $query = $this->db->connect();
        $stmt = $query->prepare('INSERT INTO USUARIOS(NOMBRE,APELLIDO,CONTRASEÑA,FECHANACIMIENTO,EMAIL,IDROL) VALUES(:nombre,:apellido,:pass,:fechaNac,:email,:idrol)');
        $datos['nombre'] = ucfirst($datos['nombre']);
        $stmt->bindparam(':nombre',$datos['nombre']);
        $datos['apellido'] = ucfirst($datos['apellido']);
        $stmt->bindparam(':apellido',$datos['apellido']);
        $stmt->bindparam(':pass',$datos['pass']);
        $stmt->bindparam(':fechaNac',$FechaNac2);
        $stmt->bindparam(':email',$datos['email']);
        $stmt->bindparam(':idrol',$idrol);
        $stmt->execute();

        return true;
      }
      catch(PDOEXCEPTION $e ){
        print_r($e->getMessage());
        return false;
     }
    }

    public function getByEmail($email){

      $query = $this->db->connect();
      $stmt = $query->prepare("SELECT * FROM Usuarios WHERE email=:email");
      $stmt->bindParam(":email",$email);
      
      try{
          $stmt->execute();
          $results = $stmt->fetch(PDO::FETCH_ASSOC);

          if($results != false && $email != ""){
              $_SESSION['user'] = array("id"=>$results['IdUsuario'],"nombre"=>$results['Nombre']);
              return true;
          }
          else{
             return false;
          }
         
       }

       catch(PDOEXCEPTION $e){
        print_r($e->getMessage());
        return false;
    }
}

}
?>