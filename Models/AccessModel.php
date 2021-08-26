<?php

include_once 'Clientes.php';

class AccessModel extends Model{

    function __construct(){
        parent::__construct();
    }

    // function verifyUser($datos){
    //     $conn = $this->model->connect();
    //       print_r($datos['email']."-".$datos['password']);
    //       if($conn&&!empty($datos['email'])&&!empty($datos['password'])){

    //       }
    // }

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
                //  $_SESSION['user_id'] = $results['IdUsuario'];
                //  $cliente = New Cliente($results['IdUsuario'],$results['Nombre'],$results['Apellido'],$results['contraseña'],$results['FechaNacimiento'],$results['Email'],$results['IdRol']);
                return true;
            }
            else{
                return false;
            }
               
             }
        //     $results = $stmt->fetch(PDO::FETCH_ASSOC);

           
        //     if(count($results)>0 && $datos['password']==$results['contraseña']){
        //         $_SESSION['user_id'] = $results['IdUsuario'];
        //         // $cliente = new Cliente($results['IdUsuario'],$results['Nombre'],$results['Apellido'],$results['contraseña'],$results['FechaNacimiento'],$results['Email'],$results['IdRol']);
        //         $cliente = new Cliente('6','juan','alvarez','1234','04-08-96','asd@hot.com','1');
        //         // header("Location: http://192.168.2.102/PHP/ProyectoBootstrap/Main");
        //         // print_r("entro");
        //            $cliente->getId();
        //            $cliente->getNombre();
        //            $cliente->getApellido();
        //            $cliente->getContraseña();
        //            $cliente->getFechaNac();
        //            $cliente->getEmail();
        //            $cliente->getRol();

        //         return $cliente;
        //     }
        //     else{
        //         return null;
        //     }
        // }

        catch(PDOEXCEPTION $e){
            print_r($e->getMessage());
            return false;
        }
    }

}

?>