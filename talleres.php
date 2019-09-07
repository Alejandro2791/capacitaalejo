<!DOCTYPE html>
<html>
<head>
    <title>Capacita Alejo</title>
     <!-- Temas-->
     <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
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
    <!-- Menu Principal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light Menu_Principal">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Nosotros<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="curso_capacitacion.php">Curso de Capacitación</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="talleres.php">Talleres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="diplomados.php">Diplomados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conferencias.php">Conferencias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:formLogin();">Iniciar Sesion</a>
      </li>
    </ul>
  </div>
</nav>
    <header>
        <table><tr><td><h1>Talleres<h1></td></tr></table>
    </header>
    <?php 
                $query1= "SELECT idtipo, descripcion FROM tipo_clases WHERE idtipo=4 ORDER BY 1";
            
                $respuesta1 = pg_query($db, $query1);
    
                while($datos1= pg_fetch_row($respuesta1)){
                    $descripcion .= $datos1[1];
                }

                $query2= "SELECT nombre, descripcion FROM clases WHERE idtipo=4 ORDER BY 1";
            
                $respuesta2 = pg_query($db, $query2);
    
                while($datos2= pg_fetch_row($respuesta2)){
                    $descripcion2 .= "<tr><td title='".$datos2[0]."'>".$datos2[0]."</td>    <td title='".$datos2[1]."'>".$datos2[1]."</td></tr>";
                }
    ?>
    <div id="Contenido">
    <section>
        <table id="Tabla1" align="center">
        <tr><td id="Titulo_tabla1">
        ¿Qué conforma nuestros talleres?
        </td></tr>
        <tr><td id="Parrafo_tabla1">
        <?php echo $descripcion; ?>
        </td></tr>
        </table>
        <br><br>
        <table id="Tabla2"><tr><td id="Titulo_tabla2">Talleres Disponibles</td></tr></table>
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
    <!-- Pie de Pagina -->
    <footer class="container-fluid text-center">
        <p> Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor 
            ac odio mauris justo. Luctus arcu, urna praesent at id quisque
            ac. <br> Arcu es massa vestibulum malesuada, integer vivamus elit eu
             mauris eus, cum eros quis a</p>
    </footer>
    </body>
</html>