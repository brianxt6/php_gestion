<!DOCTYPE html>
<html lang="es">
<head>
   <!-- BOOTSTRAP -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Responsive</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .login-container {
      background-color: #ffffff;
      padding: 30px 25px;
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 1.8rem;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
      font-size: 0.95rem;
    }

    .input-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: 1px solid #ccc;
      font-size: 1rem;
      transition: 0.3s ease;
    }

    .input-group input:focus {
      border-color: #5b9bd5;
      outline: none;
    }

    .login-btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 10px;
      background-color: #5b9bd5;
      color: white;
      font-weight: bold;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
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

    @media (max-width: 400px) {
      .login-container {
        padding: 25px 20px;
      }

      .login-container h2 {
        font-size: 1.5rem;
      }

      .input-group input {
        padding: 10px;
        font-size: 0.95rem;
      }

      .login-btn {
        padding: 12px;
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form action="#" method="post">
      <div class="input-group">
        <label for="email">Correo electrónico</label>
        <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
      </div>
      <div class="input-group">
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" placeholder="********" required>
      </div>
      <button type="submit" class="login-btn">Entrar</button>
    </form>
    <p class="footer-text">¿No tienes cuenta? <a href="registrar.php">Regístrate</a></p>
  </div>

</body>
</html>
