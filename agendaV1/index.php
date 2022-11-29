<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/estilo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center">AGENDA DE CONTACTO VERSIÓN 1.0</h1>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-6 ">
        <div class="card">
          <div class="card-body">
            <form action="app/insertarContacto.php" method="POST">
              <div class="mb-3">
                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" placeholder="Nombre">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control form-control-sm" id="apellido" name="apellido" placeholder="Apellido">
              </div>
              <div class="mb-3">
                <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Correo Electronico">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control form-control-sm" id="telefono" name="telefono" placeholder="Telefono">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control form-control-sm" id="foto" name="foto" placeholder="Foto">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control form-control-sm" id="estado" name="estado" placeholder="Estado">
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>

      </div>
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Accion</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>
              <tbody>
                <?php
                require_once 'app/listarContacto.php';
                foreach ($resultado as $llave =>  $valor) { ?>
                  <tr>
                    <td><?php echo $valor[0]; ?> </td>
                    <td><?php echo $valor[1]; ?> </td>
                    <td><?php echo $valor[2]; ?> </td>
                    <td><a href="frmEditar.php?id=<?php echo $valor[0]; ?>" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></td>
                    <td><a href="app/eliminarContacto.php?id=<?php echo $valor[0]; ?>" type="button" class="btn btn-danger"><i class="bi bi-trash"></i></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-6">
        <p>
          APLICACION DE AGENDA <br>
          Version 1.0 <br>
          Cartago - 2022
        </p>
      </div>
      <div class="col-6">
        Desarrollo por: <br>
        Stiven Herrera
      </div>
    </div>
  </div>





  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>