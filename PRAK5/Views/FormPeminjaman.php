<?php

use Models\Buku;
use Models\Member;
use Models\Peminjaman;

require_once('../Controllers/PeminjamanController.php');
require_once('../Models/Peminjaman.php');
require_once('../Models/Member.php');
require_once('../Models/Buku.php');

$operation = $_POST['operation'];
$peminjaman = [
    'id_peminjaman'  => '',
    'id_member'      => '',
    'id_buku'        => '',
    'tgl_pinjam'     => '',
    'tgl_kembali'    => '',
];
$members = Member::getAll();
$bukus = Buku::getAll();

if($operation == "update"){
    $peminjaman = PeminjamanController::read($_POST['id_peminjaman']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman Form</title>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <h1>Form Peminjaman</h1>
    <div class="mainContent">
        <form action="../Routes/PeminjamanRoutes.php?operation=<?php echo $operation; ?>" method="post">
            <?php
            if ($operation == "update"){
                $id_peminjaman = $_POST['id_peminjaman'];
                echo "<input type='hidden' name='id_peminjaman' value={$id_peminjaman}>";
            }
            ?>
            <table>
                <tr>
                    <td>Nama Member: </td>
                    <td>
                        <select name="id_member">
                            <?php 
                            foreach($members as $row){
                                if($row['id_member'] == $peminjaman['id_member']){
                                    echo '<option value="' . $row['id_member'] . '" selected>';
                                } else {
                                    echo '<option value="' . $row['id_member'] . '">';
                                }
                                echo "{$row['nama_member']} </option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Judul Buku: </td>
                    <td>
                        <select name="id_buku">
                            <?php 
                            foreach($bukus as $row){
                                if($row['id_buku'] == $peminjaman['id_buku']){
                                    echo '<option value="' . $row['id_buku'] . '" selected>';
                                } else {
                                    echo '<option value="' . $row['id_buku'] . '">';
                                }
                                echo "{$row['judul_buku']} </option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pinjam: </td>
                    <td>
                        <input
                        type="date"
                        name="tgl_pinjam"
                        value="<?php echo $peminjaman['tgl_pinjam'] ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td><input
                    type="date"
                    name="tgl_kembali"
                    value="<?php echo $peminjaman['tgl_kembali'] ?>"
                    >
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>