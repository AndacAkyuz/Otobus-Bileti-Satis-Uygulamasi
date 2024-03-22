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
                    'AdSoyad' => $user['AdiSoyadi'],
                    'Eposta' => $user['Eposta'],
                    'TelefonNo' => $user['TelefonNo'],
                    'Sifre' => $user['Sifre'],
                    'DogumTarihi' => $user['DogumTarihi'],
                    'Cinsiyet' => $user['Cinsiyet'],
                    'TCNo' => $user['TCNo'],
                ]);

            return redirect()->to('index');
        } else {
            $session->setFlashdata('message', 'Cep telefon numarası veya şifre yanlış.');
            return redirect()->to('login');
        }
    }
}