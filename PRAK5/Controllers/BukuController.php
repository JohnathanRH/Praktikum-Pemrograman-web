<?php

use Models\Buku;

require_once("../Models/Buku.php");
require_once("Controller.php");

class BukuController extends Controller{
    public static function create(array $request){
        $buku = new Buku();
        $buku->mountData($request);
        $buku->create();
        
        self::redirectTo("Views/Buku.php");
    }
    public static function read(int $id){
        $buku = new Buku();
        $buku->read($id);
        return $buku->packToArray(true);
    }
    public static function update(array $request){
        $buku = new Buku();
        $buku->mountData($request);
        $buku->update();
        
        self::redirectTo("Views/Buku.php");
    }
    public static function delete(int $id){
        $buku = new Buku();
        $buku->id_buku = $id;
        $buku->delete();

        self::redirectTo("Views/Buku.php");
    }
}
?>