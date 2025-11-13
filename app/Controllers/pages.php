<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index(): void 
    {
        echo view('layout/header');
        echo view('layout/home');
        echo view('layout/footer');
    }
}
