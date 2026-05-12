<?php
include("connection.php");
$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Editar Usuario</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="text" name="nombre" placeholder="Nombre" value="<?= $row['nombre'] ?>">
                <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $row['apellidos'] ?>">
                <input type="text" name="username" placeholder="Username" value="<?= $row['username'] ?>">
                <input type="password" name="password" placeholder="Password" value="<?= $row['password'] ?>">
                <input type="email" name="email" placeholder="Email" value="<?= $row['email'] ?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>