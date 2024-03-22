<?php

namespace App\Controllers;

class Yolcuhaklari extends BaseController
{
    public function index()
    {
        return view('yolcu-haklari'); // app/Views/index.php dosyasını yükle
    }
}

?>