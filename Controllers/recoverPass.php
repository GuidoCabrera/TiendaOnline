<?php

class recoverPass extends controller{

   function __construct(){
       parent::__construct();
   }
   
   function render(){
    session_start(); 
    if(isset($_SESSION['user']['id'])){
      header('Location:'.constant('URL').'main');
    }
    else{
      session_unset();
      session_destroy();
    }
      $this->view->render('recover/index');
   }
   
   function sendEmail(){
       $email = $_POST['email'];
       $user = $this->model->searchEmail($email);

       if($user!=null){
           $token = uniqid();
           $this->model->insertResetpass($token,$user->getId2());
           
      $header = "From: guidocabrerasdla97@gmail.com"."\r\n". 
      "Reply-To: guidocabrerasdla97@gmail.com"."\r\n". 
      "X-Mailer: PHP/".phpversion();
       $mail = mail($email,"Recuperacion de contraseña","Se ha solicitado un cambio de contraseña en la cuenta de tiendaonline.com, para continuar con el cambio de contraseña haga click en el siguiente link: ".constant('URL')."recoverPass/ChangePassword/".$user->getId2()."/".$token,$header);

        if($mail){
              echo "<script type='text/javascript'>  
              alert('se ha enviado el mail correctamente');
              </script>";
        }
        else{
           echo "<script type='text/javascript'>  
              alert('ha ocurrido un error al mandar el mail, ingrese nuevamente su email');
              window.location.href='http://192.168.2.102/PHP/ProyectoBootstrap/RecoverPass';
              </script>";
        }
      }

       else{
        echo "<script type='text/javascript'>  
        alert('El mail que ha proporcionado no esta vinculado a ninguna cuenta existente');
        </script>";
       }

       $this->render('');
   }

   function changePassword($param=null){
       if($this->model->searchToken($param[0],$param[1])){
        $this->view->render('RecoverPass/changePassword');
       }

       else{
           echo "<script type='text/javascript'>
           alert('Se fue pal otro lado');
           window.location.href='http://192.168.2.102/PHP/ProyectoBootstrap/main';
</script>";
           
       }
   }

   function newPassword(){
    session_start();
       if($_POST["password"]==$_POST["password2"]){
           $pass = $_POST["password"];
           if($this->model->insertNewPass($pass,$_SESSION['user']['id'])&&$this->model->ChangeResetpass($_SESSION['user']['id'])){
            echo "<script type='text/javascript'>
            window.location.href='http://192.168.2.102/PHP/ProyectoBootstrap/successful';
        </script>";
           }
           else{
            echo "<script type='text/javascript'>
            alert('Ha ocurrido un error');
        </script>";
            $this->render('');
           }
       }
   }
   

}
?>