<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Services as ServicesTable;
use Config\Services;

class Service extends BaseController
{
    protected $services;

    public function __construct()
    {
        $this->services = new ServicesTable();
    }

    public function table()
    {
        $session = session()->getFlashdata('alert');

        $alert = [];

        if ($session != null) {
            $alert = $session;
        }

        $data = [
            'title' => 'Tabel Kategori Jasa',
            'breadcrumb_data' => [
                'Jasa',
                'Kategori'
            ],
            'services' => $this->services->getService(),
            'alert' => $alert
        ];

        return view('admin/service/category/table', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Jasa',
            'breadcrumb_data' => [
                'Jasa',
                'Kategori',
                'detail'
            ],
            'service' => $this->services->getService($slug)
        ];

        if ($data['service'] == null) {
            return view('errors/dashboard/404', $this->dataError);
        }

        return view('admin/service/category/detail', $data);
    }

    public function createForm()
    {
        $session = session()->getFlashdata('validation');

        $validation = [];

        if ($session != null) {
            $validation = $session;
        }

        $data = [
            'title' => 'Tambah Kategori Jasa',
            'breadcrumb_data' => [
                'Jasa',
                'Kategori',
                'Tambah'
            ],
            'validation' => $validation
        ];

        return view('admin/service/category/create', $data);
    }

    public function createAction()
    {
        $data = $this->request->getPost();

        $rules = [
            'name' => [
                'rules'  => 'required|string|max_length[100]|is_unique[services.name]',
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'string' => 'Input harus berupa text.',
                    'max_legth' => 'Maksimal 100 karakter.',
                    'is_unique' => 'Nama tersebut sudah digunakan.'
                ]
            ],
            'description' => [
                'rules'  => 'string|max_length[500]',
                'errors' => [
                    'string' => 'Input harus berupa text.',
                    'max_legth' => 'Maksimal 500 karakter.'
                ]
            ],
            'logo' => [
                'rules'  => 'required|string|max_length[100]',
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'string' => 'Input harus berupa string.',
                    'max_legth' => 'Maksimal 100 karakter.'
                ]
            ]
        ];

        $status = 'Not Ready';

        if ($data['description'] != '') {
            $status = 'Ready';
        }

        if (!$this->validateData($data, $rules)) {
            $validation = Services::validation();

            return redirect()->to('/admin/service/category/create')->withInput()->with('validation', $validation->getErrors());
        }

        $model = model(ServicesTable::class);

        $model->save([
            'name' => $data['name'],
            'slug' => preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['name'])),
            'description' => $data['description'],
            'logo' => $data['logo'],
            'status' => $status
        ]);

        return redirect()->to('/admin/service/category')->with('alert', ['success' => 'Data berhasil ditambahkan.']);
    }

    public function updateForm($slug)
    {
        $session = session()->getFlashdata('validation');
        $validation = [];

        if ($session != null) {
            $validation = $session;
        }

        $data = [
            'title' => 'Edit Kategori Jasa',
            'breadcrumb_data' => [
                'Jasa',
                'Kategori',
                'Detail',
                'Edit'
            ],
            'service' => $this->services->getService($slug),
            'validation' => $validation
        ];

        if ($data['service'] == null) {
            return view('errors/dashboard/404', $this->dataError);
        }

        return view('admin/service/category/update', $data);
    }

    public function updateAction($slug)
    {
        $data = $this->request->getPost();

        $service = $this->services->getService($slug);

        if ($service == null) {
            return view('errors/dashboard/404', $this->dataError);
        }

        $nameRules = 'required|string|max_length[100]|is_unique[services.name]';

        if ($data['name'] == $service['name']) {
            $nameRules = 'required|string|max_length[100]';
        }

        $rules = [
            'name' => [
                'rules'  => $nameRules,
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'string' => 'Input harus berupa text.',
                    'max_legth' => 'Maksimal 100 karakter.',
                    'is_unique' => 'Nama tersebut sudah digunakan.'
                ]
            ],
            'description' => [
                'rules'  => 'string|max_length[500]',
                'errors' => [
                    'string' => 'Input harus berupa text.',
                    'max_legth' => 'Maksimal 500 karakter.'
                ]
            ],
            'logo' => [
                'rules'  => 'required|string|max_length[100]',
                'errors' => [
                    'required' => 'Input harus diisi.',
                    'string' => 'Input harus berupa string.',
                    'max_legth' => 'Maksimal 100 karakter.'
                ]
            ]
        ];

        $status = 'Not Ready';

        if ($data['description'] != '') {
            $status = 'Ready';
        }

        if (!$this->validateData($data, $rules)) {
            $validation = Services::validation();

            return redirect()->to('/admin/service/category/edit/' . $slug)->withInput()->with('validation', $validation->getErrors());
        }

        $model = model(ServicesTable::class);

        $model->save([
            'id' => $service['id'],
            'name' => $data['name'],
            'slug' => preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($data['name'])),
            'description' => $data['description'],
            'logo' => $data['logo'],
            'status' => $status
        ]);

        return redirect()->to('/admin/service/category')->with('alert', ['success' => 'Data berhasil diupdate.']);
    }

    public function deleteAction($id)
    {
        $this->services->delete($id);

        return redirect()->to('/admin/service/category')->with('alert', ['success' => 'Data berhasil dihapus.']);
    }
}
