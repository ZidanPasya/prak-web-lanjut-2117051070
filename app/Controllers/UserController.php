<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        //
    }
    
    public function profile(): string
    {
        $data = [
            'nama' => 'Muhammad Zidan Pasya',
            'kelas' => 'C',
            'npm' => '2117051070'
        ];

        return view('profile', $data);
    }

    public function create()
    {
        session();
        $kelas = [
            [
                'id'            => 1,
                'nama_kelas'    => 'A',
            ],
            [
                'id'            => 2,
                'nama_kelas'    => 'B',
            ],
            [
                'id'            => 3,
                'nama_kelas'    => 'C',
            ],
            [
                'id'            => 4,
                'nama_kelas'    => 'D',
            ],
        ];

        $data = [
            'kelas'         => $kelas,
            'validation'    => \Config\Services::validation(),
        ];

        return view('create_user', $data);
    }

    public function store()
    {
        if(!$this->validate([
            'nama' => 'required|is_unique[user.nama]',
            'npm' => 'required|is_unique[user.npm]',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/user/create')->withInput()->with('validation', $validation);
        }

        $userModel = new UserModel();

        $userModel->saveUser([
            'nama' => $this->request->getVar('nama'),
            'id_kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm'),
        ]);

        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm')
        ];

        return view('profile_url', $data);
    }
}
