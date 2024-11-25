<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Menú Principal</title>
</head>
<body>
<div class="container mt-5">
    <div class="text-end">
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>
    </div>
    <h1 class="text-center my-4">Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>
    <div class="d-flex justify-content-center gap-3">
        <a href="registrar_paciente.php" class="btn btn-primary">Registrar Paciente</a>
        <a href="consultar_pacientes.php" class="btn btn-secondary">Consultar Pacientes</a>
    </div>
</div>
</body>
</html>
