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
    <p>Su perfil es: <button class="btn btn-primary btn-sm">@Rol [Cliente]</button></p>
    <br>
</div>


<div class="registro">
<h3>Formulario de Solicitud</h3>
<br>
<div class="row">
    <div class="mb-3 col">
  <label for="" class="form-label">Unidad</label>
  <select class="form-select">
  <option selected>-</option>
  <option value="1">Surtilima</option>
  <option value="2">Sevivalle</option>
  <option value="3">Tropicana</option>
</select>
</div>
<div class="mb-3 col">
<label for="" class="form-label">Departamento</label>
<select class="form-select">
  <option selected>-</option>
  <option value="2">Administracion</option>
  <option value="3">Logistica</option>
</select>
</div>

<div class="mb-3">
<label for="" class="form-label">Permiso</label>
<select class="form-select">
  <option selected>-</option>
  <option value="2">Creacion</option>
  <option value="3">Nuevos permisos</option>
</select>
</div>

<div class="mb-3">
  <label for="" class="form-label">Observacion</label>
  <textarea type="text" class="form-control" id="" placeholder=""></textarea>
</div>

<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control">
</div>

<div class="mb-3">
  <a href="" class="btn btn-success d-block w-100">Enviar Formulario</a>
</div>
</div><!-CONTAINER-->



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>