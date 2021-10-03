<?php

class Access extends controller{

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
        $this->view->render('Access/index');
    }

    function AccountAccess(){
        if(!empty($_POST['emailUser'])&&!empty($_POST['password'])){
            $email = $_POST['emailUser'];
            $password = $_POST['password'];
            $value = $this->model->getByEmail(['email'=>$email,'password'=>$password]);
            if($value){
              header('Location:'.constant('URL'));
            }
            else{
                $this->view->mensaje = "El email y contraseña no coinciden con ninguna cuenta registrada";
                $this->render('');
            }
        }
        else{
          $this->view->mensaje = "No se ha completado ningun campo";
          $this->render('');
        }
    }

}
?>