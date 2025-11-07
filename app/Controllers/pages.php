<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index(): string
    {
        return view(name: 'hal');
    }

    public function admin()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'validation' => \Config\Services::validation()
        ];

        return view('admin/dashboard_admin', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
            'validation' => \Config\Services::validation()
        ];

        return view('login/login', $data);
    }
}
