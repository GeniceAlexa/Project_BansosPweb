<?php

namespace App\Controllers;

use App\Models\data;

class bansos extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function dokum()
    {
        return view('layout/dokum.php');
    }

    public function profil()
    {
        return view('user/profil.php');
    }

    public function ubah()
    {
        return view('user/ubah.php');
    }

    public function admin()
    {
        $model = new data();
        $data['users'] = $model->findAll();

        return view('admin/dashboard_admin', $data);
    }
}
