<?php
function connection()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "usersys2"; // Tu base de datos real

    $connect = mysqli_connect($host, $user, $pass);
    mysqli_select_db($connect, $bd);

    return $connect;
}
?>