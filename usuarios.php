<?php

session_start();

if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			}else{
				$uri = 'http://';
			}
		   $uri .= $_SERVER['HTTP_HOST'];

 if(!empty($_SESSION['INGRESO'])){
  if(count($_SESSION['INGRESO'])>0){

			$iduser            =$_SESSION['INGRESO']["Iduser"];
			$Ipuser            =$_SESSION['INGRESO']["Ipuser"];
			$Acceso            =$_SESSION['INGRESO']["Acceso"];
			$Hora              =$_SESSION['INGRESO']["hora"];

	      $Contra=$iduser.$Ipuser.$Hora;
	      if($Contra == $Acceso){
	       ?>
<!DOCTYPE html>
<html>
<head>
    <title>Capacita Alejo</title>
     <!-- Temas-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!--vincular con formulario.js-->
	<script type="text/javascript" src="javascript.js"></script>
</head>
    <body>
        <nav>
    <!-- Menu Principal -->
    <table>
            <tr>
            <td><a href="#">Usuarios</a></td>
            <td><a href="#">Clases</a></td>
            <td><a href="salir.php">Salir</a></td>
            </tr>
    </table>
    </nav>
    <header>
        <table><tr><td><h1>Capacitación Alejos<h1></td></tr></table>
    </header>
    <div id="Contenido">
    <section>
        <table id="Tabla1" align="center">
        <tr><td id="Titulo_tabla1">
        Alta de Usuario
        </td></tr>
        <tr><td id="Parrafo_tabla1">
            <form action="" method="post">
            <input type="text" name='nombre' placeholder="Nombre" required>
            &nbsp; &nbsp;
            <input type="text" name='apellido1' placeholder="Apellido Paterno" required>
            &nbsp; &nbsp;
            <input type="text" name='apellido2' placeholder="Apellido Materno" required>
            <br><br>
            <input type="text" name='usuario' placeholder="Usuario" required>
            &nbsp; &nbsp;
            <input type="password" name='contra' placeholder="*****" required>
            &nbsp; &nbsp;
            <button type="submit" >Enviar</button>
            </form>
        </td></tr>
        </table>
        <br><br>
        <table id="Tabla2"><tr><td id="Titulo_tabla2">Cursos Disponibles</td></tr></table>
        <hr size="2" color=#000000 width="850"/>
        <table id="Tabla3" align="center">
            <tr><th>Curso de Implementación</th>
            <th>Curso de Reconstrucción</th></tr>
            <tr><td>Lorem ipsum dolor sit amet, sapien etiam, nunc amet 
                     dolor ac odio mauris justo. Luctus arcu, urna praesent 
                     at id quisque ac. Arcu es massa vestibulum malesuada, 
                     integer vivamus elit eu mauris eus, cum eros quis aliquam 
                     wisi. Nulla wisi laoreet suspendisse integer vivamus elit
                      eu mauris hendrerit facilisi, mi mattis pariatur aliquam 
                      pharetra eget.</td>
                 <td>Lorem ipsum dolor sit amet, sapien etiam, nunc amet 
                     dolor ac odio mauris justo. Luctus arcu, urna praesent 
                     at id quisque ac. Arcu es massa vestibulum malesuada, 
                     integer vivamus elit eu mauris eus, cum eros quis aliquam 
                     wisi. Nulla wisi laoreet suspendisse integer vivamus elit
                      eu mauris hendrerit facilisi, mi mattis pariatur aliquam 
                      pharetra eget.</td></tr>
        <table>
        <hr size="2" color=#000000 width="850"/>      
    </section>
    </section>
    </div>


    <br><br><br><br><br><br><br><br>
    <footer>
    <table id="Tabla4">
        <tr><td id="Parrafo_tabla4">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor 
            ac odio mauris justo. Luctus arcu, urna praesent at id quisque <br>
            ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu
             mauris eus, cum eros quis a</td></tr>
</table>
    </footer>
    </body>
</html>
<?php
       }else{
       header("location: ".$uri);
          }
     }else{
       header("location: ".$uri);
     }
   
    }else{
       header("location: ".$uri);
    }

function IPuser() {
	$returnar ="";
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
     $returnar=$_SERVER['HTTP_X_FORWARDED_FOR'];}
if (!empty($_SERVER['HTTP_CLIENT_IP'])){
     $returnar=$_SERVER['HTTP_CLIENT_IP'];}
if(!empty($_SERVER['REMOTE_ADDR'])){
	 $returnar=$_SERVER['REMOTE_ADDR'];}
return $returnar;
}
?>