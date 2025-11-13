<?php

namespace App\Controllers;

use App\Models\data;

class login extends BaseController
{
    public function index()
    {
        return view('login/login');
    }

    public function auth()
    {
        $session = session();
        $datauser = new data();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $datauser->where('email', $email)->first();

        if ($user) {
            // cek password (gunakan hash_verify jika pakai password_hash)
            if (hash('sha256', $password) == $user['password']) {
                $sessionData = [
                    'user_id' => $user['id'],
                    'user_name' => $user['nama'],
                    'user_email' => $user['email'],
                    'logged_in' => true
                ];
                $session->set($sessionData);
                return redirect()->to('/dashboard');
            } else {
                $session->setFlashdata('msg', 'Kata sandi salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email tidak ditemukan');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login/login');
    }
}
