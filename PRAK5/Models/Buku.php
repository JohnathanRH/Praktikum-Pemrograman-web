<?php
namespace Models;

require_once('Model.php');
require_once('../Koneksi.php');

class Buku extends Model{
    protected string $tableName = "buku";

    public ?int $id_buku = null;
    public string $judul_buku = "";
    public string $penulis= "";
    public string $penerbit = "";
    public string $tahun_terbit = "";

    public function create(){
        $stmt = \Connection::database()->prepare(
            "INSERT INTO buku VALUES(
                NULL,
                :judul_buku,
                :penulis,
                :penerbit,
                :tahun_terbit
            )"
        );
        $stmt->execute($this->packToArray(false));
    }
    public function read(int $id){
        $stmt = \Connection::database()->prepare(
            "SELECT * FROM buku WHERE id_buku = ?"
        );
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        $this->mountData($data);
    }
    public function update(){
        $stmt = \Connection::database()->prepare(
            "UPDATE buku SET
            judul_buku = :judul_buku,
            penulis = :penulis,
            penerbit = :penerbit,
            tahun_terbit = :tahun_terbit
            WHERE id_buku = :id_buku"
        );
        $stmt->execute($this->packToArray());
    }
    public function delete(){
        $stmt = \Connection::database()->prepare(
            "DELETE FROM buku WHERE id_buku = ?"
        );
        $stmt->execute([$this->id_buku]);
    }
}
?>