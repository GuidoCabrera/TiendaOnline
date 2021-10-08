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
      $this->view->render('recoverPass/index');
   }

   function utf8_to_latin2($str)
   {
    return iconv ( 'utf-8', 'ISO-8859-1' , $str );
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
          $mail = mail($email,$this->utf8_to_latin2("Recuperacion de contraseña"),$this->utf8_to_latin2("Se ha solicitado un cambio de contraseña en la cuenta de tiendaonline.com, para continuar con el cambio de contraseña")." haga click en el siguiente link: ".constant('URL')."recoverPass/ChangePassword/".$user->getId2()."/".$token,$header);

          if($mail){
              $this->Message('se ha enviado el mail correctamente');
          }
          else{
              $this->Message('ha ocurrido un error al mandar el mail, ingrese nuevamente su email',constant("URL")."RecoverPass");
          }
      }
      else{ $this->Message('El mail que ha proporcionado no esta vinculado a ninguna cuenta existente'); }
      $this->render('');
   }

   function changePassword($param=null){
       if($this->model->searchToken($param[0],$param[1])){
          $this->view->render('RecoverPass/changePassword');
       }
       else{ $this->Message('Ha Ocurrido un error con los datos proporcionados, intente nuevamente',constant("URL")."RecoverPass"); }
   }

   function newPassword(){
    session_start();
       if($_POST["password"]==$_POST["password2"]){
           $pass = $_POST["password"];
           if($this->model->insertNewPass($pass,$_SESSION['user']['id'])&&$this->model->ChangeResetpass($_SESSION['user']['id'])){
             $this->Message('',constant("URL")."successful");
           }
           else{
            $this->Message('Ha ocurrido un error al cambiar la contraseña, intente nuevamente mas tarde');
            $this->render('');
           }
       }
   }
   

}
?>