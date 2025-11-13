<?php
namespace App\Controllers;

use App\Models\userModel;

class user extends BaseController
{
    protected $userModel;
    
    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function index() : string
    {
        $data =[
            'title' => 'Daftar user',
            'user' => $this->userModel->getuser()
        ];
        return view('user/index', $data);
    }

    public function detail($id_user) 
    {
        $data =[
            'title' => 'Daftar user',
            'user' => $this->userModel->getuser($id_user)
        ];
        return view('user/detail', $data);
    }

    public function hapus($id_user){
        $this->userModel->delete($id_user);

        session()->setFlashdata('pesan', 'data berhasil dihapus');
        return redirect()->to('/user');

    }

    public function ubah($id_user) 
    {
        $data =[
            'title' => 'Daftar user',
            'validation' => \Config\Services::validation(),
            'user' => $this->userModel->getuser($id_user)
        ];
        return view('user/ubah', $data);
    }


     public function update($id_user) 
    {
        if (!$this->validate([
             'Nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} aset harus diisi',
                ]
        ]
        ]

        )){
            return redirect()->to('/user/ubah/'.$this->request->getVar('id_user'))->withInput();
        }
        $this->userModel->save([
            'id_user' => $id_user,
            'Nama' => $this->request->getVar('Nama'),
            'NIK' => $this->request->getVar('NIK'),
            'status' => $this->request->getVar('status'),
             'tanggal' => $this->request->getVar('tanggal'),
        ]

        );
        session()->setFlashdata('pesan', 'data berhasil diubah');
        return redirect()->to('/user/')->withInput();
    
}}