<?php
include 'config.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM pacientes WHERE id=$id");
$paciente = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];

    $sql = "UPDATE pacientes SET nombres='$nombre', edad=$edad, apellidos='$apellidos' WHERE id=$id";
    $conn->query($sql);

    header('Location: consultar_pacientes.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Editar Paciente</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Editar Paciente</h1>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $paciente['nombres']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" class="form-control" value="<?php echo $paciente['apellidos']; ?>">
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" id="edad" name="edad" class="form-control" value="<?php echo $paciente['edad']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Guardar Cambios</button>
        <a href="consultar_pacientes.php" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
</body>
</html>
