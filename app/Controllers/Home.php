<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo 'Hola mundo';
        return view('welcome_message');
    }






}
