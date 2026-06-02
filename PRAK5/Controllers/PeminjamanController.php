<?php

use Models\Peminjaman;
require_once('../Models/Peminjaman.php');
require_once('Controller.php');

class PeminjamanController extends Controller{
    public static function create(array $request){
        $peminjaman = new Peminjaman();
        $peminjaman->mountData($request);
        $peminjaman->create();

        self::redirectTo("Views/Peminjaman.php");
    }

    public static function read(int $id){
        $peminjaman = new Peminjaman();
        $peminjaman->read($id);
        return $peminjaman->packToArray(true);
    }

    public static function update(array $request){
        $peminjaman = new Peminjaman();
        $peminjaman->mountData($request);
        $peminjaman->update();

        self::redirectTo("Views/Peminjaman.php");
    }

    public static function delete(int $id){
        $peminjaman = new Peminjaman();
        $peminjaman->id_peminjaman = $id;
        $peminjaman->delete();
        
        self::redirectTo("Views/Peminjaman.php");
    }
}
?>