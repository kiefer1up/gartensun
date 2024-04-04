<?php
 $host = 'localhost:3306';
    $dbname = 'testpini';
    $username = 'kiefer';
    $password = 'pini';
 
$conexion=mysqli_connect($host,$username,$password,$dbname);

    if (!$conexion) {
		echo "error conexión";
	}
?>