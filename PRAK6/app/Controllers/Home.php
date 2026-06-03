<?php

namespace App\Controllers;

use App\Models\Mahasiswa;

class Home extends BaseController
{
    public function index(): string
    {
        $mahasiswa = new Mahasiswa();
        $data = $mahasiswa->find(4);
        return view('home', ['mahasiswa' => $data]);
    }
}
