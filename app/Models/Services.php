<?php

namespace App\Models;

use CodeIgniter\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $allowedFields = ['name', 'email'];
    protected $useTimestamps = true;

    public function getService($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where();
    }
}
