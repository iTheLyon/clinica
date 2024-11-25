<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM pacientes WHERE id=$id";
$conn->query($sql);

header('Location: consultar_pacientes.php');
?>