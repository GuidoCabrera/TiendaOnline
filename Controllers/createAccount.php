<?php

class createAccount extends controller{

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
     $this->view->render('CreateAccount/index');
  }

  function sendMail(){

   if(!empty($_POST['Email'])&&!empty($_POST["Code"])){
      $email = $_POST['Email'];
      $code = $_POST['Code'];
      
      if($this->model->verifyExistEmail($email)){
          echo "<script type='text/javascript'>  
           window.location.href='".constant("URL")."createAccount';
           alert('El mail proporcionado ya esta relacionado con una cuenta existente');
           </script>";  
      }
      else{
         $header = "From: guidocabrerasdla97@gmail.com"."\r\n". 
         "Reply-To: guidocabrerasdla97@gmail.com"."\r\n". 
         "X-Mailer: PHP/".phpversion();
         $mail = mail($email,"Registracion tienda online","su codigo para completar la registracion es: ".$code,$header);
 
         if($mail!=true){
           echo "<script type='text/javascript'>  
           alert('ha ocurrido un error al manda el mail, complete nuevamente el formulario');
           window.location.href='".constant("URL")."createAccount';
           </script>";
         }
      }
   }
   else{
      echo "<script type='text/javascript'>
         if(window.location.href=='".constant("URL")."createAccount/sendMail'){
                alert('Ha ocurrido un error con los datos proporcionados, por favor complete los campos nuevamente');
                window.location.href='".constant("URL")."createAccount';
         }
      </script>";
   }
  }

  function insertC(){

    if(!empty($_POST['name'])&&!empty($_POST['surname'])&&!empty($_POST['password'])&&!empty($_POST['Email'])&&!empty($_POST['birthday'])){

       if($_POST['CodeA']==$_POST['CodeI']){

          if($this->model->insert(['nombre' => $_POST["name"],'apellido' => $_POST["surname"],'pass' => $_POST["password"],'FechaNac' => $_POST["birthday"],'email' => $_POST["Email"]])){
            if($this->model->getByEmail($_POST["Email"])){
               echo "<script type='text/javascript'>
                  window.location.href='".constant("URL")."successful';
               </script>";
            }
          }
          else{
            echo "<script type='text/javascript'>
               alert('Ha surgido un error al enviar los datos');
            </script>";
         }
       }
       else{
         echo "<script type='text/javascript'>
            alert('El codigo ingresado no es coincidente');
         </script>";
       }
    }
  }

};
?>