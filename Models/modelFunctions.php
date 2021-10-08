<?php 

include_once 'Clientes.php';

class modelFunctions extends model{

    public function insert($stmt,$values,$param){
         try{
            $aux = implode(",",$values);
            $query = $this->db->connect();        
            $sql = $query->prepare($stmt."(".$aux.")");
            for($i=0;$i<count($param);$i++){
              $sql->bindParam($values[$i],$param[$i]);
            }
            $sql->execute();
            return true;
         }
         catch(PDOEXCEPTION $e){
             print("Connection Failed: ".$e->getMessage());
             return false;
         }
    }

    public function delete($stmt){
        try{
          $query = $this->db->connect();
          $sql = $query->prepare("DELETE FROM ".$stmt);
          $sql->execute();
          return true;
        }
        catch(PDOEXCEPTION $e){
          print("Connection Failed: ".$e->getMessage());
          return false;
      }
      }
  
      public function modify($table,$atrForChange,$newAtr,$nameColId,$id){
          try{
              $query = $this->db->connect();
              $sql = $query->prepare("UPDATE $table SET $atrForChange='$newAtr' WHERE $nameColId='$id'");
              $sql->execute();
     
              return true;
             }
             catch(PDOEXCEPTION $e){
                 printf("Connection Failed: ".$e->getMessage());
                 return false;
             }
      }


    public function getElement($stmt){
      try{
        $query = $this->db->connect();
        $sql = $query->prepare("$stmt");
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);
        return $result;
      }
      catch(PDOEXCEPTION $e){
        print_r("Connection Failed: ".$e->getMessage());
          return false;
        }
    }

    public function verifyExist($stmt){
      try{
        $query = $this->db->connect();
        $stmt = $query->prepare("$stmt");
        $stmt->execute();
   
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result==false||$result==null){
          return false;
        }
        else{ return true; }
     }
     catch(PDO_EXCEPTION $e){
       printf("Connection Failed: ".$e->getMessage());
     }
    }
}
?>