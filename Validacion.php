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
        if($this->ValidarUsuario()==false){
            $this->Mensaje_=$this->Mensaje_;	
           }else{
               if($this->ValidarPass()==false){
                $this->Mensaje_=$this->Mensaje_;	
               }else{
                    
                   if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
                       $uri = 'https://';
                   }else{
                       $uri = 'http://';
                   }
                   $uri .= $_SERVER['HTTP_HOST'];
       
                   echo    "<script type=\"text/javascript\">
                              window.location=\"".$uri."/inicio.php\";
                             </script>";
       
               } 
           }
    }

    //Funcion de Validacion Usuario
    public function ValidarUsuario(){
        $retorno = false;

        $Database = getenv('database_database');
        $Host     = getenv('database_host');
        $Password = getenv('database_password');
        $Port     = getenv('database_port');
        $User     = getenv('database_user');

        $db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password");

        //Validar Conexion Base de Datos
        if(!$db){
            $this->Mensaje_='<div><strong>Error!!!</strong>Conexion erronea al Servidor</div>';
        }else{
            //Consulta SQL
            $consulta = "SELECT idusuario, usuario, activo FROM usuarios WHERE usuario='alejandro.osorio';";
            $respuesta = pg_query($db,$consulta);

            $valor = pg_fetch_array($respuesta);

            while($datos = pg_fetch_row($respuesta)){
                $Activo = $datos[2];
            }
            //Validar existencia de Usuario
            if(pg_num_rows($respuesta)>0){
                //Validar Usuario activo
                if($Activo='1'){
                    $retorno = true;
                }else{
                    $this->Mensaje_='<div><strong>Error!!!</strong>El Usuario se encuentra inactivo</div>';
                }
            }else{
                $this->Mensaje_=  '<div><strong>Error!!!</strong>El Usuario incorrecto</div>';
            }
        }
    }

    //Funcion de Validacion Contrasena
    private function ValidarPass(){
        $retorno = false;
        $contra   = filter_var($this->Contrasena_, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES | FILTER_FLAG_ENCODE_AMP);
        
        $Database = getenv('database_database');
        $Host     = getenv('database_host');
        $Password = getenv('database_password');
        $Port     = getenv('database_port');
        $User     = getenv('database_user');

        $db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password");

        //Consulta SQL
        $consulta ="SELECT idusuario, usuario, contrasena, activo FROM usuarios
                    WHERE contrasena='".$this->Contrasena_."' AND usuario='".$this->Usuario_."';";
        $respuesta = pg_query($db, $consulta);

        if(pg_num_rows($respuesta)>0){
            //Array
            $datos = pg_fetch_array($respuesta);

            $iduser = $datos[0];
            $Ipuser = $this->IPuser();
            $hora = time();
            $acceso =$iduser.$Ipuser.$hora;

            $_SESSION['INGRESO'] = array(
                "Iduser"    =>$iduser,
                "Ipuser"    =>$Ipuser,
                "hora"      =>$hora,
                "Acceso"    =>$acceso);
            $retorno = true;
        }else{
            $this->Mensaje_='<div><strong>Error!!!</strong>Contraseña incorrecto</div>';
            $retorno = false;
        }
    }

    private function IPuser() {
        $returnar ="";
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
         $returnar=$_SERVER['HTTP_X_FORWARDED_FOR'];}
    if (!empty($_SERVER['HTTP_CLIENT_IP'])){
         $returnar=$_SERVER['HTTP_CLIENT_IP'];}
    if(!empty($_SERVER['REMOTE_ADDR'])){
         $returnar=$_SERVER['REMOTE_ADDR'];}
    return $returnar;
    }
    
    public function MostrarMsg(){
        return $this->Mensaje_;
    }
}
?>