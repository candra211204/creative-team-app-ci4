<?php

namespace App\Controllers;

use App\Models\Services;

class Landingpage extends BaseController
{
    protected $datas;

    public function __construct()
    {
        $this->datas = new Services();
        $this->datas = $this->datas->getService();
    }

    public function index()
    {
        $datas = [
            'title' => 'Landingpage',
            'services' => $this->datas
        ];

        return view('landingpage', $datas);
    }
}
