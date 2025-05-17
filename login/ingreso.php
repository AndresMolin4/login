<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: index.html");
  exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Panel de Control</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php"><button>Cerrar sesión</button></a>
  </div>
</body>
</html>
