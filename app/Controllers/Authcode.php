<?php

namespace App\Controllers;

use CodeIgniter\Controller;

$isLoggedIn = false;
class Authcode extends Controller
{

    public function login()
    {

        $request = \Config\Services::request();
        $session = session();

        $Eposta = $request->getPost('Eposta');
        $Sifre = $request->getPost('Sifre');

        $model = new \App\Models\AuthModel();
        $user = $model->where('Eposta', $Eposta)
            ->where('Sifre', $Sifre)
            ->first();

            if ($user) {
                $session->set('isLoggedIn', true);
                $session->set('auth_user', [
                    'AdSoyad' => $user['AdSoyad'],
                    'Eposta' => $user['Eposta'],
                    'TelefonNo' => $user['TelefonNo'],
                    'Sifre' => $user['Sifre'],
                    'DogumTarihi' => $user['DogumTarihi'],
                    'Cinsiyet' => $user['Cinsiyet'],
                    'TCNo' => $user['TCNo']
                ]);

            return redirect()->to('index');
        } else {
            $session->setFlashdata('message', 'Eposta veya şifre yanlış.');
            return redirect()->to('login');
        }
    }
   
    public function register()
    {
        $request = \Config\Services::request();
        $session = session();

        // Formdan gelen verileri al
        $data = [
            'AdSoyad' => $request->getPost('AdSoyad'),
            'Eposta' => $request->getPost('Eposta'),
            'TelefonNo' => $request->getPost('TelefonNo'),
            'DogumTarihi' => $request->getPost('DogumTarihi'),
            'Sifre' => $request->getPost('Sifre'),
            'Cinsiyet' => $request->getPost('Cinsiyet'),
            'TCNo' => $request->getPost('TCNo')
        ];

        // Veritabanı modelini yarat
        $model = new \App\Models\AuthModel();

        // Veriyi ekleyelim
        if ($model->insert($data)) {
            $session->setFlashdata('message', 'Kayıt başarıyla tamamlandı.');
            return redirect()->to('servisler');
        } else {
            $session->setFlashdata('error', 'Kayıt sırasında bir hata oluştu. Lütfen tekrar deneyin.');
            return redirect()->back()->withInput();
        }
    }
    
 }
