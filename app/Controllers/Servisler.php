<?php

namespace App\Controllers;

class Servisler extends BaseController
{
    public function index()
    {
        return view('servisler'); // app/Views/index.php dosyasını yükle
    }
}

?>