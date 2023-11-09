<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Películas</title>
  </head>
  <body>
    <h1>Listado de Películas</h1>
    <br>
    <a href="pelicula/new/">Crear
    </a>
    <table>
      <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Opciones</th>
      </tr>
      <?php foreach ($peliculas as $key => $value) : ?>
      <tr>
        <td> <?= $value ['id'] ?> </td>
        <td> <?= $value ['titulo'] ?> </td>     
        <td> <?= $value ['descripcion'] ?> </td>
        <td> <a href="pelicula/edit/<?= $value['id'] ?>">edit</a>
             <a href="pelicula/remove/<?= $value['id'] ?>">del</a>
             <a href="pelicula/show/<?= $value['id'] ?>">show</a> 
        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </body>
</html>