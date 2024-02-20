<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dasbor Creative Team',
            'breadcrumb_data' => ['Dasbor']
        ];

        return view('admin/dashboard', $data);
    }
}
