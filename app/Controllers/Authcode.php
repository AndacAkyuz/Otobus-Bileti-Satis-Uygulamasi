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
    $userModel = new \App\Models\AuthModel();

    // Kullanıcıdan gelen form verilerini al
    $userData = [
        'AdSoyad' => $this->request->getPost('AdSoyad'),
        'Eposta'    => $this->request->getPost('Eposta'),
        'TelefonNo'    => $this->request->getPost('TelefonNo'),
        'Sifre' => $this->request->getPost('Sifre'), // Parolayı hash'leme
        'DogumTarihi'    => $this->request->getPost('DogumTarihi'),
        'Cinsiyet'    => $this->request->getPost('Cinsiyet'),
        'TCNo'    => $this->request->getPost('TCNo'),
    ];

    // Kullanıcıyı kaydetmeye çalış
    if ($userModel->insert($userData) === false) {
        // Kayıt başarısız ise kullanıcıyı kayıt formuna geri yönlendir
        return redirect()->to('/register')->withInput()->with('errors', $userModel->errors());
    } else {
        // Kayıt başarılı ise kullanıcıyı giriş sayfasına yönlendir
        return redirect()->to('/iletisim')->with('success', 'Kayıt işlemi başarıyla tamamlandı. Lütfen giriş yapın.');
    }
}

    
 }
