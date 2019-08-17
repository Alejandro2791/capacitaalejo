<?php
session_start();

class Validacion
{
    //Variables de Almacenamiento
    private $Usuario_       ="";
    private $Nombre_Usuario ="";
    private $Contrasena_    ="";
    private $Mensaje_       ="";

    //Funcion de Validacion
    function __construct($Usuario, $Contrasena){
        $this->$Usuario_=$Usuario;
        $this->$Contrasena_=$Contrasena;
    }

    //Funcion de Ingresar
    public function Ingresar(){

    }

    //Funcion de Validacion Usuario
    public function ValidarUsuario(){
        $retorno = false;
    }

    //Funcion de Validacion Contrasena
    private function ValidarPass(){
        $retorno = false;

    }

}
?>