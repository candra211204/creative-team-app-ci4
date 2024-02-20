<?php

namespace App\Models;

use CodeIgniter\Model;

class Services extends Model
{
    protected $table = 'services';
    protected $allowedFields = ['name', 'slug', 'description', 'logo', 'status', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    public function getService($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where('slug', $slug)->first();
    }
}
