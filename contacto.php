<!DOCTYPE html>
<html>
<head>
    <title>Capacita Alejo</title>
     <!-- Temas-->
     <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!--vincular con formulario.js-->
	<script type="text/javascript" src="javascript.js"></script>
</head>
    <body>
    <!-- Menu Principal -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light Menu_Principal">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg-light" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Nosotros<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="curso_capacitacion.php">Curso de Capacitación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="talleres.php">Talleres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="diplomados.php">Diplomados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="conferencias.php">Conferencias</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contacto.php">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="javascript:formLogin();">Iniciar Sesion</a>
      </li>
    </ul>
  </div>
</nav>
    <header>
        <table><tr><td><h1>Contactos<h1></td></tr></table>
    </header>
    <div id="Contenido">
    <section>
        <table id="Tabla3" align="center">
            <tr><th id="contacto">Contactanos</th>
            <th id="ubicacion" valign="top">
            <hr size="2" color=#000000/>
                Ubicación</th></tr>
            <tr><td id="contacto">
                <form action='#' method='POST'>
                <br>
                <label for='nombre'>Nombre y Apellido:</label>
                <br>    <br> 
                <input id="casilla" type='text' name='nombre' required>
                <br>    <br> 
                <label for='nombre'>Email:</label>
                <br>    <br> 
                <input id="casilla" type='email' name='correo' required>
                <br>    <br>
                <label for='consulta'>Consulta:</label>
                <br>    <br> 
                <input id="casilla1" type='text' name='consultar' required>
                <br>    <br>   
                <input type='submit' value='Enviar'>
                <br>    <br>   
            </form>
            </td>
                 <td id="ubicacion" valign="top">
                 Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor 
            ac odio mauris justo. Luctus arcu, urna praesent at id quisque 
            ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu
             mauris eus, cum eros quis a
             <iframe src="https://goo.gl/maps/6cC5H68XaUPYbRaw8" height="250" width="400" frameborder="0"></iframe>
                    <hr size="2" color=#000000/>  
                 </td></tr>
        <table>
            
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