<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;
use CodeIgniter\HTTP\ResponseInterface;

class MahasiswaController extends BaseController
{
    public function show(int $id){
        $mahasiswa = new Mahasiswa();
        $mhsData = $mahasiswa->find($id);
        $pengalamans = $mahasiswa->getPengalamans($id);

        return view('profile', [
            'mahasiswa' => $mhsData,
            'pengalamans' => $pengalamans
        ]);
    }
    public function index()
    {
        //
    }
}
