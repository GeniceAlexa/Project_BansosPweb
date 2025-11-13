<?php

    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class data extends Model
    {
        protected $table = 'data_user';
        protected $primaryKey = 'id_user';
        protected $allowedFields= ['Nama', 'NIK', 'status', 'tanggal'];
        
        public function getdata($iddata = false)
        {
            if ($iddata == false){
                return $this ->findAll();
            }

            return $this->where(['id_user' => $iddata])->first();
        }
    }