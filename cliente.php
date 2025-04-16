<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

table{
    width: 100%;
}

.tabla{
    background: #ffffff;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    padding: 10px;
    border-radius: 10px;
    max-width: 100%;
    overflow: auto;
    width: 100%;
}

body{
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
    height: 100vh;
}



</style>

</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Bootstrap" width="130" height="24"  style="margin-right: 20px;">
      <button class="btn btn-primary btn-sm" type="submit">Cerrar</button>
    </a>
  </div>
</nav>

<div class="container">


<div class="inicio">
    <br>
    <h2>Bienvenido [@Usuario]</h2>
    <p>Su perfil es: <button class="btn btn-primary btn-sm">@Rol [Cliente]</button>   <a href="formulariocliente.php" class="btn btn-success btn-sm">Crear Solicitud</a></p>
    <br>
</div>
<br>
<br>

<h2>Solicitudes</h2>
<br>
<div class="tabla table-hover">

<table class="table">
    <thead>
    <tr>
        <th>
           id 
        </th>
        <th>
            Solicitud
        </th>
        <th>
            Fecha
        </th>
        <th>
            Observacion
        </th>
        <th>
            Jefe
        </th>       
        <th>
            Estado [Jefe]
        </th>       
        <th>
            Observacion [Jefe]
        </th>
        <th>
            Estado [Gestion]
        </th>
        <th>
            Observacion [Gestion]
        </th>
        <th>
            Aprobacion
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            100
        </td>
        <td>
            202505123
        </td>
        <td>
            10/03/2025
        </td>
        <td>
            Solictud permiso facturador
        </td>
        <td>
            Brian Acevedo
        </td>
        <td>
            <button class="btn btn-warning btn-sm">Pendiente</button>
        </td>
        <td>
            Pendiente
        </td>
        <td>
            <button class="btn btn-warning btn-sm">Pendiente</button>
        </td>
        <td>
            Pendiente
        </td>
        <td>
            <button class="btn btn-warning btn-sm">Pendiente</button>
        </td>
    </tr>
    </tbody>
</table>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>