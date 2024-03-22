<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login'); // app/Views/index.php dosyasını yükle
    }
}

?>