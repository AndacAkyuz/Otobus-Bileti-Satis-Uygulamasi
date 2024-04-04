<?php

namespace App\Controllers;

use App\Models\OtobusModel;

class Admin extends BaseController
{
    public function index(): string
    {
        $user = session();
        return View('admin/admin.php');
       
    
    }
}
?>