<?php
use Models\Buku;
require_once('../Models/Buku.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Buku</h1>
    <div class="mainContent">
        <a href="Member.php">Members</a>
        <a href="Peminjaman.php">Peminjaman</a>
        <table>
            <tr>
                <th>ID_Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php
            $data = Buku::getAll();
            foreach ($data as $row){
                echo "<tr>";
                
                foreach($row as $col){
                    echo<<<HTML
                        <td>
                            $col
                        </td>
                    HTML;
                }
                $id_buku = $row['id_buku'];
                
                echo<<<HTML
                    <td>
                        <form action="FormBuku.php" method="post">
                            <input type="hidden" name="id_buku" value="$id_buku">
                            <button type="submit" name="operation" value="update">Update</button>
                        </form>
                        <form action="../Routes/BukuRoutes.php?operation=delete" method="post">
                            <input type="hidden" name="id_buku" value="$id_buku">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                HTML;

                echo "</tr>";
            }
            ?>
        </table>
        <form action="FormBuku.php" method="post">
            <button type="submit" name="operation" value="create">Tambah Data</button>
        </form>
    </div>
</body>
</html>