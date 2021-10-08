<?php

class Cliente{

private $id;
private $nombre;
private $apellido;
private $password;
private $fechaNac;
private $email;
private $idRol;

public function __construct($id,$nom,$ape,$contra,$fechaNa,$mail,$idrol){
    $this->id = $id;
    $this->nombre = $nom;
    $this->apellido = $ape;
    $this->password = $contra;
    $this->fechaNac = $fechaNa;
    $this->email = $mail;
    $this->idRol = $idrol;
}

public function getId(){ echo $this->id; }

public function getNombre(){ echo $this->nombre; }

public function getApellido(){ echo $this->apellido; }

public function getContraseña(){ echo $this->password; }

public function getFechaNac(){ echo $this->fechaNac; }

public function getFechaNac2(){ return $this->fechaNac; }

public function getEmail(){ echo $this->email; }

public function getRol(){ echo $this->idRol; }

public function getId2(){ return $this->id; }

}
?>