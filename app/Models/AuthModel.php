<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'kullanici';

    protected $allowedFields = ['AdSoyad', 'Eposta', 'TelefonNo', 'Sifre', 'DogumTarihi', 'Cinsiyet', 'TCNo'];

    public function registerUser($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query ? true : false;
    }

    public function checkEmailExists($Eposta)
    {
        return $this->db->table($this->table)->where('Eposta', $Eposta)->countAllResults() > 0;
    }

    public function loginUser($Eposta, $Sifre)
    {
        return $this->db->table($this->table)->where('Eposta', $Eposta)->where('Sifre', $Sifre)->get()->getRowArray();
    }
}