<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index(){
        $bukus = Buku::paginate(10);
        return view('dashboard', ['bukus' => $bukus]);
    }
    
    public function create(){
        return view('buku.form');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'judul' => ['required'],
            'penulis' => ['required'],
            'penerbit' => ['required'],
            'tahun_terbit' => ['required']
        ]);

        Buku::create($validated);
        return redirect()->route('dashboard');
    }

    public function edit(Buku $buku){
        return view('buku.form', ['buku' => $buku]);
    }
    
    public function update(Buku $buku, Request $request){
        $validated = $request->validate([
            'judul' => ['required'],
            'penulis' => ['required'],
            'penerbit' => ['required'],
            'tahun_terbit' => ['required']
        ]);

        $buku->update($validated);
        return redirect()->route('dashboard');
    }

    public function destroy(Buku $buku){
        $buku->delete();
        return redirect()->route('dashboard');
    }
}
