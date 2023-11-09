<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar Película</title>
  </head>
  <body>
        <form action = "/codeigniter4/public/pelicula/update/<?= $pelicula['id'] ?>" method="post">     
            <?= view('_form', [
                'op' => 'Actualizar'
            ]);
            ?>
        </form>
  </body>
</html>