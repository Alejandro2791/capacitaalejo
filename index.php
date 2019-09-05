<!DOCTYPE html>
<html>
<head>
    <title>Capacita Alejo</title>
     <!-- Temas-->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--vincular con formulario.js-->
    <script type="text/javascript" src="javascript.js"></script>
    
    <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
    <body>
    <!-- Menu Principal -->
        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="Menu_Principal">
        <ul class="nav navbar-nav">
        <li><a href="index.php">Nosotros</a></li>
        <li><a href="curso_capacitacion.php">Curso de Capacitación</a></li>
        <li><a href="talleres.php">Talleres</a></li>
        <li><a href="diplomados.php">Diplomados</a></li>
        <li><a href="conferencias.php">Conferencias</a></li>
        <li><a href="contacto.php">Contacto</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="javascript:formLogin();">Iniciar Sesión</a></li>
        </ul>
        </div>
    </div>

    </nav>
    <header>
        <table><tr><td><h1>Capacitación Alejos<h1></td></tr></table>
    </header>
    <div id="Contenido">
    <section>
        <table id="Tabla1" align="center">
        <tr><td id="Titulo_tabla1">
        ¿Quienes somos?
        </td></tr>
        <tr><td id="Parrafo_tabla1">
        Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac 
        odio mauris justo. Luctus arcu, urna praesent at id quisque ac.
         Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris 
         eus, cum eros quis aliquam wisi. Nulla wisi laoreet suspendisse integer 
         vivamus elit eu mauris hendrerit facilisi, mi mattis pariatur aliquam 
         pharetra eget.
        </td></tr>
        </table>
        <br><br>
        <table id="Tabla2"><tr><td id="Titulo_tabla2">Nuestra Filosofia</td></tr></table>
        <hr size="2" color=#000000 width="850"/>
        <table id="Tabla3" align="center">
            <tr><th>Misión</th>
            <th>Visión</th></tr>
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