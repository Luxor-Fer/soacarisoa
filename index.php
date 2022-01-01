<?php
/*
require_once "controllers/controller.php";
require_once "models/model.php";
$mvc = new MvcController();
$mvc-> plantilla();
//sucursal

require_once "controllers/controllerPlanta.php";
//planta
require_once "models/model.php";
$mvc = new MvcController();
$mvc-> plantilla();
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>puta vida</title>
</head>
<body style="background-color: black;">
    
<div class="divFormulario">
<form class="formularioLogin">
    <div class="divAvatarLogin">
        <img src="img/login.png" alt="jf" class="avatarLogin" >
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="color: rgb(124, 248, 227);">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="color: rgb(124, 248, 227);">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

<div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">

  <input type="radio" class="btn-check" name="btnradio" id="btnSucursal" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnSucursal">Sucursal</label>

  <input type="radio" class="btn-check" name="btnradio" id="btnPlanta" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnPlanta">Planta</label>

</div>

  <div style="text-align: center;">
      <button type="submit" class="btn btn-primary" style="color: rgb(124, 248, 227);">Ingresar</button>
    </div>
</form>

</div>
</body>
</html>