<?php

namespace Models;
require_once("../Models/Peminjaman.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Peminjaman</h1>
    <div class="mainContent">
        <a href="Member.php">Members</a>
        <a href="Buku.php">Buku</a>
        <table>
            <tr>
                <th>ID_Peminjaman</th>
                <th>ID_Member</th>
                <th>ID_Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Nama Member</th>
                <th>Judul Buku</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = Peminjaman::getAllRelated([
                "member" => ["nama_member"],
                "buku" => ["judul_buku"]
            ]);

            foreach ($data as $row){
                echo "<tr>";
                
                foreach($row as $col){
                    echo<<<HTML
                        <td>
                            $col
                        </td>
                    HTML;
                }
                $id_peminjaman = $row['id_peminjaman'];
                
                echo<<<HTML
                    <td>
                        <form action="FormPeminjaman.php" method="post">
                            <input type="hidden" name="id_peminjaman" value="$id_peminjaman">
                            <button type="submit" name="operation" value="update">Update</button>
                        </form>
                        <form action="../Routes/PeminjamanRoutes.php?operation=delete" method="post">
                            <input type="hidden" name="id_peminjaman" value="$id_peminjaman">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                HTML;

                echo "</tr>";
            }
            ?>
        </table>
        <form action="FormPeminjaman.php" method="post">
            <button type="submit" name="operation" value="create">Tambah Data</button>
        </form>
    </div>
</body>
</html>