<?php
namespace Models;

require_once('Model.php');
require_once('Member.php');
require_once('Buku.php');

class Peminjaman extends Model{
    protected string $tableName = "peminjaman";
    protected array $relationship = [
        Member::class,
        Buku::class
    ];

    public ?int $id_peminjaman;
    public int $id_member;
    public int $id_buku;
    public string $tgl_pinjam;
    public string $tgl_kembali;

    public function create(){
        $stmt = \Connection::database()->prepare(
            "INSERT INTO peminjaman VALUES(
                NULL,
                :id_member,
                :id_buku,
                :tgl_pinjam,
                :tgl_kembali
            )"
        );
        $stmt->execute($this->packToArray(false));
    }

    public function read(int $id){
        $stmt = \Connection::database()->prepare(
            "SELECT * FROM peminjaman WHERE id_peminjaman = ?"
        );
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        $this->mountData($data);
    }

    public function update(){
        $stmt = \Connection::database()->prepare(
            "UPDATE peminjaman SET
            id_member = :id_member,
            id_buku = :id_buku,
            tgl_pinjam = :tgl_pinjam,
            tgl_kembali = :tgl_kembali
            WHERE id_peminjaman = :id_peminjaman"
        );
        print_r($this->packToArray());
        $stmt->execute($this->packToArray());
    }

    public function delete(){
        $stmt = \Connection::database()->prepare(
            "DELETE FROM peminjaman WHERE id_peminjaman = ?"
        );
        $stmt->execute([$this->id_peminjaman]);
    }
}
?>