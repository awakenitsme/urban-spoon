<?php



$servername = "localhost";
$username = "root";
$password = "";
$db = "jambriento";
$mysqli = new mysqli($servername,$username,$password,$db);

if(mysqli_connect_errno()){
    printf("Fallo en la conexion: %s/n",
    $mysqli->connect_error);
    exit();
}

?>