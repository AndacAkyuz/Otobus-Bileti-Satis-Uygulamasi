<?php

namespace App\Controllers;

use App\Libraries\Hash;
use App\Models\UsersModel;


class Auth extends BaseController
{
    public function __construct()
    {
        helper(['url', 'form']);
    }
    public function index(): string
    {
        return view('index');
    }
    
    public function check()
    {

        $validation = $this->validate([
            'email' => [
                'rules' => ['required|validate_email|is_not_unique[kullanici.Eposta]'],
                'errors' => [
                    'required' => 'Email alanı boş olamaz',
                    'is_not_unique' => 'Email alanı kayıtlı değil.',
                    'valid_email' => 'Geçerli bir email yazmadınız'
                ]
                ],
                'password' => [
                    'rules' => ['required|min_length[5]|max_length[12]'],
                    'errors' => [
                        'required' => 'Parola alanı boş olamaz',
                        'min_length' => 'Şifreniz en az 5 karakterden az olamaz.',
                        'max_length' => 'Şifrenizin uzunluğu en fazla 12 karakter olabilir.'
                    ]
                ]

        ]);
        if (!$validation) {
            return view('Panel/Login_v',['validation' =>$this->validator]);
        }else{
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $usersModel = new \app\Models\UsersModel();
            $user_info = $usersModel->where('Eposta', $email)->first();
            $check_password = Hash::check($password, $user_info['password']);
        }
       
    }
}
