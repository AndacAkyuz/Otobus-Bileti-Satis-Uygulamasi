<?php

namespace App\Controllers;

use App\Models\UserModel;

class Kullanici extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new UserModel();

        // Oturumdan kullanıcı bilgilerini alma
        $auth_user = $session->get('auth_user');

        // Kullanıcı oturumu açık değilse
        if (!$auth_user) {
            return redirect()->to('login'); // Account sayfasına yönlendirme
        }

        // Kullanıcı bilgilerini TcKimlik'e göre al
        $user = $userModel->where('TCNo', $auth_user['TCNo'])->first();

        return view('kullanici', ['user' => $user]);
    }
    public function update()
{
    $userModel = new UserModel();

    // Formdan gelen verileri al
    $data = [
        'AdSoyad' => $this->request->getPost('AdSoyad'),
        'Eposta' => $this->request->getPost('Eposta'),
        'TelefonNo' => $this->request->getPost('TelefonNo'),
        'Sifre' => $this->request->getPost('Sifre'),
        'Cinsiyet' => $this->request->getPost('Cinsiyet'),
    ];

    // TcKimlik'e göre kaydı güncelle
    $userModel->update($this->request->getPost('TCNo'), $data);

    return redirect()->to('kullanici'); // Güncelleme işleminden sonra kullanici sayfasına yönlendirme
}

}
