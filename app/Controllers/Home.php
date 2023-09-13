<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
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
