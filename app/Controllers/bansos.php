<?php

namespace App\Controllers;

use App\Models\Data;

class bansos extends BaseController
{
    protected $data;

    public function __construct()
    {
        $this->data = new Data();
    }

    public function dokum()
    {
        return view('layout/dokum');
    }

    public function profil()
    {
        return view('user/profil');
    }

    public function admin()
    {
        $data['users'] = $this->data->findAll();
        return view('admin/dashboard_admin', $data);
    }

    public function pengajuan(): string
    {
        $data = [
            'title' => 'Daftar user',
            'user' => $this->data->getdata()
        ];
        return view('admin/pengajuan', $data);
    }

    public function detail($id_user)
    {
        $data = [
            'title' => 'Detail user',
            'user' => $this->data->getdata($id_user)
        ];
        return view('admin/detail', $data);
    }

    public function hapus($id_user)
    {
        $this->data->delete($id_user);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin');
    }

    public function ubah($id_user)
    {
        $data = [
            'title' => 'Ubah Data User',
            'validation' => \Config\Services::validation(),
            'user' => $this->data->getdata($id_user)
        ];
        return view('user/ubah', $data);
    }

    public function update($id_user)
    {
        if (!$this->validate([
            'Nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ]
        ])) {
            return redirect()->to('/user/ubah/' . $this->request->getVar('id_user'))->withInput();
        }

        $this->data->save([
            'id_user' => $id_user,
            'Nama' => $this->request->getVar('Nama'),
            'NIK' => $this->request->getVar('NIK'),
            'status' => $this->request->getVar('status'),
            'tanggal' => $this->request->getVar('tanggal'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin');
    }
}
