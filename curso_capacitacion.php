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
    <!-- Base de Datos -->
    <?php 
                    $Database = getenv('database_database');
                    $Host     = getenv('database_host');
                    $Password = getenv('database_password');
                    $Port     = getenv('database_port');
                    $User     = getenv('database_user');
                    $db = pg_connect("host=$Host dbname=$Database port=$Port user=$User password=$Password");
    ?>
        <nav><table>
        <tr>
        <td><a href="index.php">Nosotros</a></td>
            <td><a href="curso_capacitacion.php">Curso de Capacitación</a></td>
            <td><a href="talleres.php">Talleres</a></td>
            <td><a href="diplomados.php">Diplomados</a></td>
            <td><a href="conferencias.php">Conferencias</a></td>
            <td><a href="contacto.php">Contacto</a></td>
            <td><a href="javascript:formLogin();">Iniciar Sesión</a></td>
            </tr>
    </table></nav>
    <header>
        <table><tr><td><h1>Cursos de Capacitación<h1></td></tr></table>
    </header>
    <?php 
                $query1= "SELECT idtipo, descripcion FROM tipo_clases WHERE idtipo=2 ORDER BY 1";
            
                $respuesta1 = pg_query($db, $query1);
    
                while($datos1= pg_fetch_row($respuesta1)){
                    $descripcion .= $datos1[1];
                }

                $query2= "SELECT nombre, descripcion FROM clases WHERE idtipo=2 ORDER BY 1";
            
                $respuesta2 = pg_query($db, $query2);
    
                while($datos2= pg_fetch_row($respuesta2)){
                    $descripcion2 .= "<tr><td title='".$datos2[0]."'>".$datos2[0]."</td>    <td title='".$datos2[1]."'>".$datos2[1]."</td></tr>";
                }
    ?>
    <div id="Contenido">
    <section>
        <table id="Tabla1" align="center">
        <tr><td id="Titulo_tabla1">
        ¿Qué conforman nuestros cursos de capacitación?
        </td></tr>
        <tr><td id="Parrafo_tabla1">
                <?php echo $descripcion; ?>
        </td></tr>
        </table>
        <br><br>
        <table id="Tabla2"><tr><td id="Titulo_tabla2">Cursos Disponibles</td></tr></table>
        <hr size="2" color=#000000 width="850"/>
        <table id="Tabla3" align="center">
            <tr><th>Nombre</th>
            <th>Descripcion</th></tr>
            <?php echo $descripcion2; ?>
        <table>
        <hr size="2" color=#000000 width="850"/>      
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