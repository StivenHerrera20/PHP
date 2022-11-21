<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="background-color:darkgray ;">
  <div class="container-fluid w-100">
    <h1 class="text-center mt-3">PROMEDIO DE NOTAS DE 6 ESTUDIANTES</h1>
    <div class="row mt-5 w-100">
        <div class="col-6 m-auto w-50">
            <form action="app/promedio.php" method="POST">
  <div class="mb-3">
    <label for="Estudiante1" class="form-label">Nota estudiante 1</label>
    <input type="text" class="form-control" id="Estudiante1" name="Estudiante1">
  </div>
  <div class="mb-3">
  <label for="Estudiante2" class="form-label">Nota estudiante 2</label>
    <input type="text" class="form-control" id="Estudiante2" name="Estudiante2">
  </div>
  <div class="mb-3">
  <label for="Estudiante3" class="form-label">Nota estudiante 3</label>
    <input type="text" class="form-control" id="Estudiante3" name="Estudiante3">
  </div>
  <div class="mb-3">
    <label for="Estudiante4" class="form-label">Nota estudiante 4</label>
    <input type="text" class="form-control" id="Estudiante4" name="Estudiante4">
  </div>
  <div class="mb-3">
  <label for="Estudiante5" class="form-label">Nota estudiante 5</label>
    <input type="text" class="form-control" id="Estudiante5" name="Estudiante5">
  </div>
  <div class="mb-3">
  <label for="Estudiante6" class="form-label">Nota estudiante 6</label>
    <input type="text" class="form-control" id="Estudiante6" name="Estudiante6">
  </div>
  <button type="submit" class="btn btn-primary m-auto">Enviar</button>
</form></div>
    </div>
  </div>  





    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>