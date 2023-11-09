<?php

namespace App\Controllers;
use App\Models\PeliculaModel;

class pelicula extends BaseController
{
    public function new()
    {
        echo view('new');
    }



    public function create()
    {
        $peliculaModel = new PeliculaModel(); 
        $peliculaModel->insert([
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion')
        ]);
        echo 'Creado...';
    }   



    public function edit($id)
    {
        $peliculaModel = new PeliculaModel(); 
        
        echo view('edit', [
            'pelicula' => $peliculaModel->find($id)
        ]);

    }



    public function update($id)
    {
        $peliculaModel = new PeliculaModel(); 
        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
    ]);
    echo 'Actualizado...';
    }



    public function remove($id)
    {
        $peliculaModel = new PeliculaModel(); 
        $peliculaModel->delete($id);
    echo 'Eliminado...';
    }



    public function show($id)
    {
        $peliculaModel = new PeliculaModel(); 
        echo view('show', 
            [ 'peliculas' => $peliculaModel->find($id)
        ]);
    }



    public function index()
    {
        $peliculaModel = new PeliculaModel();       
        echo view('index', [
            'peliculas' => $peliculaModel->findAll(),
        ]);
    }






}
