<?php
include 'databaseconnect.php';
session_start();
$query  = "SELECT * FROM `prd`";
   $result =mysqli_query($conexion,$query);
    mysqli_close($conexion);
    while($row = mysqli_fetch_assoc($result))
    {
    ?>
     <div class="col-12 prod">
    <a href="prod/<?php echo $row['cod']; ?>.php"> <img src="img/<?php echo $row['cod']; ?>.jpg"  height="250"/>
    </a>
    <span><?php echo $row['name']; ?></span>
    <span>$<?php echo $row['price']; ?></span></div>
    <?php
    }
?>