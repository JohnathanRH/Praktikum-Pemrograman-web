<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pengalaman;
use CodeIgniter\HTTP\ResponseInterface;

class PengalamanController extends BaseController
{
    public function show(int $id){
        $pengalaman = new Pengalaman();
        $data = $pengalaman->find($id);
        return view('detail_pengalaman', ['pengalaman' => $data]);
    }
    public function index()
    {
        //
    }
}
