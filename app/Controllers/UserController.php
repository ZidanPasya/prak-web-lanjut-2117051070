<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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

    public function create(): string
    {
        return view('create_user');
    }

    public function store(): string
    {
        $data = [
            'nama' => $this->request->getVar('nama'),
            'kelas' => $this->request->getVar('kelas'),
            'npm' => $this->request->getVar('npm')
        ];

        return view('profile_url', $data);
    }
}
