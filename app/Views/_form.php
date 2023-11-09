
            <label for="titulo">Título</label>
            <input type="text" name="titulo" placeholder="Título" id="titulo" value="<?= $pelicula['titulo'] ?>">
            <br>
            <label for="descripcion">Descripción</label>
            <br>
            <textarea name="descripcion" id="descripcion"><?= $pelicula['descripcion'] ?></textarea>
            <button type="submit"><?= $op ?></button>      
