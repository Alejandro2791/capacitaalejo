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
            <td><a href="index.php">Nosotros</a></td>
            <td><a href="curso_capacitacion.php">Curso de Capacitación</a></td>
            <td><a href="talleres.php">Talleres</a></td>
            <td><a href="diplomados.php">Diplomados</a></td>
            <td><a href="conferencias.php">Conferencias</a></td>
            <td><a href="contacto.php">Contacto</a></td>
            <td><a href="salir.php">Salir</a></td>
            </tr>
    </table>
    </nav>
    <header>
        <table><tr><td><h1>Capacitación Alejos<h1></td></tr></table>
    </header>
    <div id="Contenido">
    <section>
             
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