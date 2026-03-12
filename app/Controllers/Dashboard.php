<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $data = [
            'title' => 'Dashboard',
            'userName' => $session->get('name')
        ];
        
        return view('dashboard/index', $data);
    }
}
