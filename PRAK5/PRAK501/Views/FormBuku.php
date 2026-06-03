<?php

require_once("../Controllers/BukuController.php");

$operation = $_POST['operation'];
$buku = [
    'id_buku'      => null,
    'judul_buku'   => "",
    'penulis'      => "",
    'penerbit'     => "",
    'tahun_terbit' => ""
];

if($operation == "update"){
    $buku = BukuController::read($_POST['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <h1>Form Buku</h1>
    <div class="mainContent">
        <form action="../Routes/BukuRoutes.php?operation=<?php echo $operation; ?>" method="post">
            <?php
            if ($operation == "update"){
                $id_buku = $_POST['id_buku'];
                echo "<input type='hidden' name='id_buku' value={$id_buku}>";
            }
            ?>
            <table>
                <tr>
                    <td>Judul Buku: </td>
                    <td><input
                        type="text"
                        name="judul_buku"
                        value="<?php echo $buku['judul_buku']; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td>Penulis: </td>
                    <td><input
                    type="text"
                    name="penulis"
                    value="<?php echo $buku['penulis'] ?>"
                    >
                    </td>
                </tr>
                <tr>
                    <td>Penerbit: </td>
                    <td><input
                    type="text"
                    name="penerbit"
                    value="<?php echo $buku['penerbit']; ?>"
                    >
                    </td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td><input
                    type="number"
                    name="tahun_terbit"
                    value="<?php echo $buku['tahun_terbit'] ?>"
                    >
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>