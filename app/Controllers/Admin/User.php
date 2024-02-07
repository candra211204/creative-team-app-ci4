<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function index()
    {
        echo ('Halaman ini hanya diakses oleh admin');
    }
}
