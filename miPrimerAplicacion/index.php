<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
    <h1>MI PRIMER APP</h1>
    <div class="row">
        <div class="col-6">
            <img src="./assets/LuffyChiquito.jpeg" alt="" class="img-fluid" >
        </div>
        <div class="col-6">
            <form action="app/sumarNumeros.php" method="POST">
  <div class="mb-3">
    <label for="numero1" class="form-label">Numero 1</label>
    <input type="text" class="form-control" id="numero1" name="numero1">
  </div>
  <div class="mb-3">
  <label for="numero2" class="form-label">Numero 2</label>
    <input type="text" class="form-control" id="numero2" name="numero2">
  </div>
  <div class="mb-3">
  <label for="numero3" class="form-label">Numero 3</label>
    <input type="text" class="form-control" id="numero3" name="numero3">
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form></div>
    </div>
  </div>  





    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>