<?php
include("connection.php");
$con = connection();

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "UPDATE users SET nombre='$nombre', apellidos='$apellidos', username='$username', password='$password', email='$email' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
} else {
    echo "Falla en la edición.";
}
?>