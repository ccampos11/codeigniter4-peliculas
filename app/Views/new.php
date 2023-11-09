<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Película</title>
  </head>
  <body>
        <form action = "create" method="post">
            <?= view('_form', [
                'op' => 'Crear'
            ]);
            ?>
        </form>
  </body>
</html>