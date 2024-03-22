<?php

namespace App\Controllers;

class Kullanici extends BaseController
{
    public function index()
    {
        return view('kullanici'); // app/Views/index.php dosyasını yükle
    }
}

?>