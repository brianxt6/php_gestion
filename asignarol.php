<!DOCTYPE html>
<html lang="es">
<head>
   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Moderno</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      transition: 0.3s ease;
    }

    .input-group input:focus {
      border-color: #5b9bd5;
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background-color: #5b9bd5;
      color: white;
      font-weight: bold;
      cursor: pointer;
      margin: 3px;
      transition: 0.3s;
    }

    .login-btn:hover {
      background-color: #4a8ac4;
    }

    .footer-text {
      text-align: center;
      margin-top: 15px;
      font-size: 0.9em;
      color: #666;
    }

    .footer-text a {
      color: #5b9bd5;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Asignacion de Rol</h2>
    <form action="./registrar" method="post">
      <div class="input-group">
        <label for="">Buscar Correo</label>
        <input type="text" id="nombres" name="nombres" required>
      </div>
      <br>
      <hr>
      <br>
      <div class="input-group">
        <label for="">Correo encontrado</label>
        <input type="text" id="apellidos" name="apellidos" required>
      </div>
      <div class="input-group">
        <label for="">Rol</label>
        <input type="text" id="cc" name="cc" required>
      </div>
      <button type="submit" class="login-btn">Buscar</button>
      <button type="submit" class="login-btn">Actualizar</button>
      <button type="submit" class="login-btn">Cerrar</button>
    </form>
    <p class="footer-text">¿Tienes cuenta? <a href="login.php">Inicio</a></p>
  </div>

</body>
</html>
