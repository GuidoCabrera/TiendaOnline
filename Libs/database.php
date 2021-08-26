<?php 

class Database{

   private $host;
   private $db;
   private $user;
   private $password;
   private $charset;

   public function __construct(){
       $this->host = constant('HOST');
       $this->db = constant('DB');
       $this->user = constant('USER');
       $this->password = constant('PASSWORD');
       $this->charset = constant('CHARSET');
   }

   function connect(){

    // $connec = mysqli_connect($this->host, $this->user, $this->password, $this->db);
    try {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->password);
        return $conn;
      } 
      
      catch (PDOException $e) {
        die('Connection Failed: ' . $e->getMessage());
        return false;
      }

//     if (!$connec) {
//         die("Connection failed: " . mysqli_connect_error());
//         return false;
//   }
//   else if($connec==true){
//        return $connec;
//   }


//        try{
//            $connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;
//            $options = [
//             PDO::ATTR_ERRMODE            =>PDO::ERRMODE_EXCEPTION,
//             PDO::ATTR_EMULATE_PREPARES   =>false,
//         ];
//      $pdo = new PDO($connection,$this->user,$this->password,$options);
//      return true;
//     }
//     catch(PDOException $e){
//         return false;
//         echo "<script type='text/javascript'>
//             alert('llego al catch');
//    </script>";
//          print_r('Error en la conexion'.$e->getMessage());
//     }
          
   }

}
?>




