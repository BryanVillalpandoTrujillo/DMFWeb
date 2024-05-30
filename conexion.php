<?php
$conex = mysqli_connect("localhost", "root", "", "formulario");

if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
