<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Service extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Tabel Jasa',
            'navbar' => $this->dashboardNavbar
        ];
        
        return view('admin/service/table', $data);
    }
}
