<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengalaman;

class PengalamanController extends Controller
{
    public function show(Pengalaman $pengalaman){
        return view('pengalaman-detail', ['pengalaman' => $pengalaman]);
    }
}
