<?php
require_once 'Validacion.php';
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
    <!-- Titulo -->
    <header>
        <table><tr><td><h1>Capacitación Alejos<h1></td></tr></table>
    </header>


    <!-- Formulario Login -->
    <div class="Formulario_Login">
    <form action="" method="post" name="FormLogin">
    <input type="text" name='user' placeholder="Usuario" required>
    <br><br>
    <input type="password" name='contra' placeholder="*****" required>
    <br><br>
    <button type="submit" >Entrar</button>
        <!-- Mensaje -->
        <?php
        $iniciar=new Validacion($_POST['user'],$_POST['contra']);
        $iniciar->Ingresar();
        echo $iniciar->MostrarMsg();
        ?>
    </form>
    </div>
    </body>
</html>