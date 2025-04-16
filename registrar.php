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
    }

    body {
      background: linear-gradient(135deg, #74ebd5, #ACB6E5);
      height: 100vh;
    }

    .menu{
      margin: 200px;
      width: 500px;
      background: #ffffff;
      border-radius: 10px;
      justify-content: center;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .menu .h1{
      text-align: center;
    }

    .formulario{
      justify-content: center;
      margin: 20px 20px;
    }

  </style>
</head>
<body>

    <div class="container">
    <div class="row justify-content-center">
    <div class="menu">
      <br>
      <h2 class="d-flex justify-content-center align-items-center">Registro de cuentas</h2>
        <div class="formulario">

        <div class="mb-3">
        <label for="" class="form-label">Fecha</label>
        <input type="date" class="form-control">
        </div>

        <div class="mb-3">
        <label for="" class="form-label">Servicio</label>
        <select name="" id="" class="form-select">
          <option value="">-</option>
          <option value="">Semipermanente</option>
          <option value="">Acrilico</option>
          <option value="">Mantenimiento</option>
        </select>
        </div>

        <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="text" class="form-control">
        </div>

        <a href="#" class="btn btn-success w-100 mb-3">Registrarse</a>
      <br>
        </div>
    </div>
    </div>


</body>
</html>
