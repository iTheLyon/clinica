<?php
session_start();

// Eliminar variables de sesión y cookies
session_destroy();
//setcookie('usuario', '', time() - 3600, '/');

// Redirigir al login
header('Location: login.php');
exit;
?>