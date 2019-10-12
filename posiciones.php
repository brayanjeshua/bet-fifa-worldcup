<?php
  session_start();
  require 'funcs/conexion.php';
  include 'funcs/funcs.php';
  
  if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: index.php");
  }
  
  $idUsuario = $_SESSION['id_usuario'];

  //CONSULTA ESPECIAL DE RANKING
  $sql = "SELECT usuario,COUNT(pollas.id) as puntuacion 
  FROM pollas
  INNER JOIN partidos ON partidos.idPartidos= pollas.idPartidos
  INNER JOIN usuarios ON pollas.id = usuarios.id
  WHERE apuesta = resultado
  GROUP BY pollas.id
  ORDER BY puntuacion DESC";
  $rs = $mysqli->query($sql);
  while ($row = mysqli_fetch_assoc($rs)){
      $item[] = $row;
  }

?>

<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" >
    <script src="js/bootstrap.min.js" ></script>

    <link rel="stylesheet" href="css/estilos.css">
    
    <style>
      body {
      padding-top: 100px;
      padding-bottom: 50px;
      background:url('img/fondo-rojo.jpg') no-repeat center center fixed;
      background-size:cover;
      }
      #nav ul {
      bottom:70px !important;
      margin-left:230px;
      }
    </style>
  </head>
  
  <body>
    <div class="container">
      
    <nav class='navbar'>
        <div class='container-fluid'>

          <!--div class='navbar-header'>
            <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
              <span class='sr-only'>Men&uacute;</span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
              <span class='icon-bar'></span>
            </button>
          </div-->

          <div id='nav' class=''>
            <ul>
              
              <li><a href='instrucciones.php'>Instrucciones</a></li>
              <li><a href='calendario.php'>Calendario</a></li>
              <li class="bgNon"><a href='bienvenida.php'>Inicio</a></li>
                <?php if($_SESSION["id_usuario"] == 1) { ?>
                         <li><a href='pollaAdmin.php'>Llenar los Partidos</a></li>
                      <?php  }  else { ?>
                         <li><a href='polla.php'>Llenar la Polla</a></li>
                      <?php  } ?>
              <li><a href='posiciones.php'>Posiciones</a></li>

            </ul>
            <?php if($_SESSION['tipo_usuario']==1) { ?>
              <ul class=''>
                <li><a href='generarLlaves.php'>Administrar Usuarios</a></li>
              </ul>
            <?php } ?>
            
            <ul class=''>
            </ul>
          </div>
        </div>
      </nav>
      
  
<div class="posiciones"></div>
<div class="jumbotron table-responsive">
    <!--u><h3 class="text-center "><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>RANKING </h3></u-->
  <table class="tablePosiciones table table-bordered">
    <tr class="text-center">
  <th>POSICIÓN</th>
  <th>USUARIO</th>
  <th>PUNTOS</th>
  </tr>

 <?php 
    if(isset($item)) {
 $acum = 0;
foreach($item as $filas) {
  $acum++;
   if($acum == 1) {
    echo '<tr class="dif"> <th colspan=3>NIVEL PROFE PÉKERMAN </th> </tr>';
   }
    if($acum == 2) {
    echo '<tr class="dif"> <th colspan=3>NIVEL FALCAO </th> </tr>';
   }
    if($acum == 5) {
    echo '<tr class="dif"> <th colspan=3>NIVEL STEFAN MEDINA</th> </tr>';
   }
?>

  <tr class="text-center">

     <td ><?php echo $acum ?></td>
     <td ><?php echo $filas['usuario'] ?></td>
     <td ><?php echo $filas['puntuacion'] ?></td>
  
</tr> 
<?php
}
  }
?>
  </table>
</div>

    </div>
  </body>
</html>