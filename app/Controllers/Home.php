<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile_url($image = "", $nama = "", $kelas = "", $npm = ""): string
    {
        $data = [
            'image' => $image,
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];

        return view('profile_url', $data);
    }
}
