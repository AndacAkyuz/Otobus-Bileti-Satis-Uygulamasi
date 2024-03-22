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
        echo "Hello World!";
        return view('index');
    }
    
   
}
