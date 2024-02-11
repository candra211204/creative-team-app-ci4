<?php

namespace App\Controllers;

use App\Models\Services;

class Landingpage extends BaseController
{
    protected $services;

    public function __construct()
    {
        $this->services = new Services();
        $this->services = $this->services->getService();
    }

    public function index()
    {
        $data = [
            'title' => 'Landingpage',
            'navbar' => $this->navbar,
            'services' => $this->services
        ];

        return view('landingpage', $data);
    }
}
