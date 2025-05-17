<?php
session_start();
$conn = new mysqli("localhost", "tu_usuario", "tu_contraseña", "tu_base_de_datos");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
  $result = $conn->query($query);

  if ($result->num_rows == 1) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
  } else {
    echo "<script>alert('Usuario o contraseña incorrectos');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Iniciar Sesión</h2>
    <form method="post">
      <input type="text" name="username" placeholder="Usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Ingresar</button>
    </form>
    <a href="index.html"><button>Volver</button></a>
  </div>
</body>
</html>