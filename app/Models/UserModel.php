<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'kullanici';
    protected $primaryKey = 'Eposta';
    protected $allowedFields = ['AdSoyad', 'Eposta', 'TelefonNo', 'Sifre', 'DogumTarihi', 'Cinsiyet', 'TCNo'];
}
