<?php
$servidor ="localhost";
$usuario= "root"; 
$pass= "";
$base="torteria";
$conn= mysqli_connect("$servidor", "$usuario", "$pass", "$base");
if (!$conn) {
die("Error de conexion".
mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Ingresos </title>

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css  -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">

</head>
<body>
    
<!-- header inicia  -->

<header>

    <a href="/torteria" class="logo"><i class="fas fa-utensils"></i>Tortas Winnie Pooh | Registro de Ingresos</a>

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.html">Regresar</a>
    </nav>

</header>

<!-- header termina-->

<!-- home  inicia-->

<section class="home" id="home">
    <div class="row">
        
        <form action="operaciones.php" method="post" name="Agregar Venta">

            <div class="inputBox">
                <input type="text" name= "cubana" placeholder="Ventas | Torta Cubana">
                <input type="text" name= "hawaiiana" placeholder="Ventas | Torta Hawaiiana">
            </div>

            <div class="inputBox">
                <input type="text" name= "tradicional" placeholder="Ventas | Torta Tradicional">
                <input type="text" name= "sandwich" placeholder="Ventas | Sandwich">
            </div>

            <div class="inputBox">
                <input type="text" name= "jugo" placeholder="Ventas | Jugo">
                <input type="text" name= "ensalada" placeholder="Ventas | Ensalada">
            </div>

            <input type="submit" value="Agregar Venta" class="btn">

        </form>

    </div>
    <table class="table-all">
  <tr>
    <td class="titles-table">Nombre del Platillo</td>
    <td class="titles-table">Precio del Platillo</td>
    <td class="titles-table">Ventas</td>
    <td class="titles-table">Ingresos</td>
  </tr>
  <?php
      $consulta="SELECT * FROM menu"; 
      mysqli_query($conn, $consulta);
  $datos = mysqli_query($conn, $consulta);

  while($fila = mysqli_fetch_assoc($datos)) { ?>
    <tr>
      <td><?php echo $fila['nom_pl']; ?></td>
      <td><?php echo $fila['pr_pl']; ?></td>
      <td><?php echo $fila['vn_pl']; ?></td>
      <td><?php echo $fila['ing_pl']; ?></td>
    </tr>
    <?php } ?>
</table>
</section>


<!-- home termina-->

<!-- seccion footer  -->

<section class="footer">

    <h1 class="credit"> Creado por <span> IDE TECH </span> | todos los derechos reservados! </h1>

</section>


<!-- loader  -->
<div class="loader-container">
    <img src="images/loader.gif" alt="">
</div>




















<!-- custom js file link  -->
<script src="script.js"></script>


</body>
</html>