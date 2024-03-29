<?php

namespace App\Controllers;

use App\Models\BusModel;
use CodeIgniter\Controller;

class Sefer extends Controller
{
    public function index()
    {
        $busModel = new BusModel();
        $data['terminaller'] = $busModel->getBusRoutes();

        return view('biletara2', $data);
    }

    public function showDetails($routeId)
    {
        $busModel = new BusModel();
        $data['Sehir'] = $busModel->getBusRoute($routeId);

        echo view('popup', $data);
    }
}
