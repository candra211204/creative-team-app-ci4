<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;


class ServicesSeeder extends Seeder
{
    public function run()
    {
        $myTime = Time::now();

        $data = [
            [
                'name' => 'Aplikasi',
                'slug' => 'aplikasi',
                'description' => 'Tersedia jasa pembuatan Website, Mobile Apps, dan Desktop Apps',
                'status' => 'Ready',
                'logo' => 'bx bx-desktop',
                'created_at' => $myTime,
                'updated_at' => $myTime,
            ],
            [
                'name' => 'Desain Grafis',
                'slug' => 'desain-grafis',
                'description' => 'Tersedia jasa pembuatan Poster, Thumbnail Youtube, Logo, Banner',
                'status' => 'Ready',
                'logo' => 'bx bx-palette',
                'created_at' => $myTime,
                'updated_at' => $myTime,
            ]
        ];

        $this->db->table('services')->insertBatch($data);
    }
}
