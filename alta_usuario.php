<?php
//Variables de Insertar Datos
$Nombre =$_POST['nombre'];
$Apellido =$_POST['apellido1'];
$Apellido1 =$_POST['apellido2'];
$Usuario =$_POST['usuario'];
$Contrasena =$_POST['contra'];

//Validacion de Nombre
if(preg_match("/[A-Zaz]/", $Nombre)==true){

    //Validacion de Apellido
      if(preg_match("/[A-Zaz]/", $Apellido)==true){
    
        //Validacion de Apellido1
        if(preg_match("/[A-Zaz]/", $Apellido1)==true){
    
              //Validacion de Correo
          if(preg_match("/[a-zAZ0-9\_\-]+\@[a-zA-Z0-9]+\.[a-zA-Z0-9]/", $Correo )==true){
    
                $Database = getenv('database_database');
                $Host     = getenv('database_host');
                $Password = getenv('database_password');
                $Port     = getenv('database_port');
                $User     = getenv('database_user');
                $db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password");
      
            $sql = "INSERT INTO usuarios (nombre, apellido1, apellido2, usuario, contra, activo) 
                    VALUES ('$Nombre', '$Apellido', '$Apellido1', '$Usuario', '$Contrasena', '1')";
          if(pg_query($db, $sql)){
            echo "<script>
            alert('Alta exitosa');
            window.location= '/usuario.php';
            </script>";
            }else{
              echo "<script>
              alert('Alta erronea');
              window.location= '/usuario.php';
              </script>";
            }
            }else{
              echo "<script>
              alert('Error - El correo que ingresaste no tiene formato correcto');
              window.location= '/usuario.php';
              </script>";
            }
          }else{
              echo "<script>
              alert('Error - El apellido que ingresaste no tiene formato correcto');
              window.location= '/usuario.php';
              </script>";
            }
      }else{
        echo "<script>
        alert('Error - El apellido que ingresaste no tiene formato correcto');
        window.location= '/usuario.php';
        </script>";
        }
    }else{
        echo "<script>
        alert('Error - El nombre que ingresaste no tiene formato correcto');
        window.location= '/usuario.php';
        </script>";
      }
?>