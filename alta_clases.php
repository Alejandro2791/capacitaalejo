<?php
//Variables de Insertar Datos
$Clase =$_POST['clase'];
$IdUsuario =$_POST['IdUsr'];
$Descripcion =$_POST['descripcion'];
$TipoClase =$_POST['tipo'];

//Validacion de Nombre
if(preg_match("/[a-zAZ0-9\_\-]/", $Clase)==true){

    //Validacion de Descripcion
      if(preg_match("/[a-zAZ0-9\_\-]/", $Descripcion)==true){
    
                $Database = getenv('database_database');
                $Host     = getenv('database_host');
                $Password = getenv('database_password');
                $Port     = getenv('database_port');
                $User     = getenv('database_user');
                $db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password");
      
            $sql = "INSERT INTO clases (idusuario, idtipo, nombre, descripcion, activo) 
                    VALUES ( $IdUsuario, $TipoClase, '$Clase', '$Descripcion', '1')";
          if(pg_query($db, $sql)){
            echo "<script>
            alert('Alta exitosa');
            window.location= '/clases.php';
            </script>";
            }else{
              echo "<script>
              alert('Alta erronea');
              window.location= '/clases.php';
              </script>";
            }
      }else{
        echo "<script>
        alert('Error - La Descripcion que ingresaste no tiene formato correcto');
        window.location= '/clases.php';
        </script>";
        }
    }else{
        echo "<script>
        alert('Error - El Titulo de Clase que ingresaste no tiene formato correcto');
        window.location= '/usuarios.php';
        </script>";
      }