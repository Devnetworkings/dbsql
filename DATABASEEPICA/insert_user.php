<?php
include("connection.php");
$con = connection();

$id = null;
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users VALUES('$id','$nombre','$apellidos','$username','$password','$email')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
    echo "Error en la producción.";
}
?>