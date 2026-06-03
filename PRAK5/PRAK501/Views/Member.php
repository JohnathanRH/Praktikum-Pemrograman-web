<?php
use Models\Member;
require_once('../Models/Member.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Member</h1>
    <div class="mainContent">
        <a href="Buku.php">Buku</a>
        <a href="Peminjaman.php">Peminjaman</a>
        <table>
            <tr>
                <th>ID_Member</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Action</th>
            </tr>
            <?php
            $data = Member::getAll();
            foreach ($data as $row){
                echo "<tr>";
                
                foreach($row as $col){
                    echo<<<HTML
                        <td>
                            $col
                        </td>
                    HTML;
                }
                $id_member = $row['id_member'];
                
                echo<<<HTML
                    <td>
                        <form action="FormMember.php" method="post">
                            <input type="hidden" name="id_member" value="$id_member">
                            <button type="submit" name="operation" value="update">Update</button>
                        </form>
                        <form action="../Routes/MemberRoutes.php?operation=delete" method="post">
                            <input type="hidden" name="id_member" value="$id_member">
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                HTML;

                echo "</tr>";
            }
            ?>
        </table>
        <form action="FormMember.php" method="post">
            <button type="submit" name="operation" value="create">Tambah Data</button>
        </form>
    </div>
</body>
</html>