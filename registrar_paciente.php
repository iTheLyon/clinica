<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];

    $sql = "INSERT INTO pacientes (nombres,apellidos, edad) VALUES ('$nombre', $apellidos, '$edad')";
    $conn->query($sql);

    header('Location: menu.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registrar Paciente</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Registrar Paciente</h1>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombres</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" id="edad" name="edad" class="form-control" required>
        </div>       
      
        <button type="submit" class="btn btn-success">Registrar</button>
        <a href="menu.php" class="btn btn-secondary">Volver</a>
    </form>
</div>
</body>
</html>
