<?php

include_once 'Clientes.php';

class AccessModel extends Model{

    function __construct(){
        parent::__construct();
    }

   public function getByEmail($datos){

            $query = $this->db->connect();
            $stmt = $query->prepare("SELECT * FROM Usuarios WHERE email=:email");
            $stmt->bindParam(":email",$datos['email']);
            
        try{
                $stmt->execute();
                $results = $stmt->fetch(PDO::FETCH_ASSOC);

                if($results != false && $datos['password']==$results['contraseña']){
                    session_start();
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