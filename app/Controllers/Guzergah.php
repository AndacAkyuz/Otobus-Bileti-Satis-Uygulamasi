<?php

namespace App\Controllers;

use App\Models\SeferModel;

use App\Models\KoltukModel;

class Guzergah extends BaseController
{
    public function index(): string 
    {
      $seferModel = new SeferModel;
        $data = [
            'seferler' => $seferModel->getAllSefer()
        ];
        return View('guzergah/guzergah.php',$data);
              
 
    }

    public function show($id): string
    {
        $seferModel = new SeferModel;
        $koltukModel = new KoltukModel;
        $tekSefer = [
            'sefer' => $seferModel->getTekSefer($id)
        ];
        $koltuklar = [
            'koltuklar' => $koltukModel->getKoltuklar($id)
        ];
        return View('guzergah/guzergahDetay.php',array_merge($tekSefer, $koltuklar));
              
              
    }
}
?>