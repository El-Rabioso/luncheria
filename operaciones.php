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
<?php 
$vn_cub=$_POST["cubana"];
$vn_haw=$_POST["hawaiiana"];
$vn_tra=$_POST["tradicional"];
$vn_san=$_POST["sandwich"];
$vn_jug=$_POST["jugo"];
$vn_ens=$_POST["ensalada"];
?>
<!-- agregar venta inicia -->
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_cub WHERE id_pl = 1";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_haw WHERE id_pl = 2";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_tra WHERE id_pl = 3";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_san WHERE id_pl = 4";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_jug WHERE id_pl = 5";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET vn_pl = vn_pl + $vn_ens WHERE id_pl = 6";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<!-- agregar venta termina -->
<!-- calculo de ingresos inicia -->
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 1";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 2";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 3";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 4";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 5";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<?php 
$consulta = "UPDATE menu SET ing_pl = vn_pl * pr_pl WHERE id_pl = 6";
if(mysqli_query($conn,$consulta)) {
} else {
echo "ERROR >:(".$consulta . "<br>" . mysqli_error($conn);
}
?>
<!-- calculo de ingresos termina -->

<script>
    setTimeout(function(){
        window.location.href = 'ingresos.php';
    }, 2000);
</script>