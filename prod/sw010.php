<?php require_once '../head.php'; 
include '../databaseconnect.php';
session_start();
$query  = 'SELECT * FROM `prd` WHERE cod = "sw010"';
$result =mysqli_query($conexion,$query);
mysqli_close($conexion);
$row = mysqli_fetch_assoc($result);?>
<div class='col-8'>
	<h1>GartenSun automatiza tu jardin</h1>
	<p>venta y asesoría en proyectos en areas verdes</p>
	<div class='col-12 vitrina'>
		<div class='col-12 prod'>
			<img src='../img/<?php echo $row['cod']; ?>.jpg' height='250'/></a>
		</div>
		<div class='col-12 prod'>
			<span><?php echo $row['name']; ?></span>
			<span>$<?php echo $row['price']; ?></span>
		</div>
	</div>
</div>
<?php require_once '../aside.php';
require_once '../foot.php';?>