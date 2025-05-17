
<?php
$conn = new mysqli("localhost", "tu_usuario", "tu_contraseña", "tu_base_de_datos");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $check = $conn->query("SELECT * FROM usuarios WHERE username='$username'");
  if ($check->num_rows > 0) {
    echo "<script>alert('Este usuario ya existe');</script>";
  } else {
    $conn->query("INSERT INTO usuarios (username, password) VALUES ('$username', '$password')");
    echo "<script>alert('Registrado correctamente'); window.location.href='index.html';</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Registrarse</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Registrarse</h2>
    <form method="post">
      <input type="text" name="username" placeholder="Nuevo usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Registrarse</button>
    </form>
    <a href="index.html"><button>Volver</button></a>
  </div>
</body>
</html>
