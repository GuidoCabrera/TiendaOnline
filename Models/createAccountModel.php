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
        // print_r($query);
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


      //   $conn = $this->db->connect();
      //   if($conn){
      //       $FechaNac = explode("/",$datos['FechaNac']);
      //       $FechaNac2 = $FechaNac[2]."-".$FechaNac[1]."-".$FechaNac[0];
      //       $sql = "INSERT INTO Usuarios(Nombre,Apellido,Contraseña,FechaNacimiento,Email,IdRol) VALUES('".$datos["nombre"]."','".$datos["apellido"]."','".$datos["contraseña"]."','".$FechaNac2."','".$datos["email"]."','2')";
      //         if (mysqli_query($conn, $sql)) {
      //            mysqli_close($conn);
      //            return true;
      //      }
      //      else{
      //        echo "<script type='text/javascript'>
      //        alert('no se pudo completar la registración');
      //        </script>";
      //        mysqli_error($conn);
      //        mysqli_close($conn);
      //        return false;
      //      } 
      //        return true;
      //   }

      //   else if(!$conn) {
      //       die("Connection failed: " . mysqli_connect_error());
      //       return false;
      // }
        

    }

    public function getByEmail($email){

      // session_start();
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