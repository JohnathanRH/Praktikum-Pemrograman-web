<?php
namespace Models;

require_once('Model.php');
require_once('../Koneksi.php');

class Member extends Model{
    protected string $tableName = "member";

    public ?int $id_member = null;
    public string $nama_member = "";
    public string $nomor_member = "";
    public string $alamat = "";
    public string $tgl_mendaftar = "";
    public string $tgl_terakhir_bayar = "";

    public function create()
    {
        $stmt = \Connection::database()->prepare(
            "INSERT INTO member VALUES (
                NULL,
                :nama_member,
                :nomor_member,
                :alamat,
                :tgl_mendaftar,
                :tgl_terakhir_bayar
            )"
        );
        $stmt->execute($this->packToArray(false));
    }

    public function read(int $id){
        $stmt = \Connection::database()->prepare(
            "SELECT * FROM member WHERE id_member = ?"
        );
        $stmt->execute([$id]);
        $data = $stmt->fetch();
        
        if($data == false){
            return null;
        }

        $this->mountData($data);
        return $this;
    }

    public function update(){
        $stmt = \Connection::database()->prepare(
            "UPDATE member SET 
            nama_member = :nama_member,
            nomor_member = :nomor_member,
            alamat = :alamat,
            tgl_mendaftar = :tgl_mendaftar,
            tgl_terakhir_bayar = :tgl_terakhir_bayar
            WHERE id_member = :id_member"
        );
        $stmt->execute($this->packToArray());
    }

    public function delete(){
        $stmt = \Connection::database()->prepare(
            "DELETE FROM member WHERE id_member = ?"
        );
        $stmt->execute([$this->id_member]);
    }
}
?>