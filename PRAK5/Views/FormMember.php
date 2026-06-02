<?php
use Models\Member;
require_once('../Controllers/MemberController.php');
require_once('../Models/Member.php');

$operation = $_POST['operation'];
$member = [
    'id_member'          => '',
    'nama_member'        => '',
    'nomor_member'       => '',
    'alamat'             => '',
    'tgl_mendaftar'      => '',
    'tgl_terakhir_bayar' => ''
];

if($operation == "update"){
    $member = MemberController::read($_POST['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <link rel="stylesheet" href="formStyle.css">
</head>
<body>
    <h1>Form Member</h1>
    <div class="mainContent">
        <form action="../Routes/MemberRoutes.php?operation=<?php echo $operation; ?>" method="post">
            <?php
            if ($operation == "update"){
                $id_member = $_POST['id_member'];
                echo "<input type='hidden' name='id_member' value={$id_member}>";
            }
            ?>
            <table>
                <tr>
                    <td>Nama Member: </td>
                    <td><input
                        type="text"
                        name="nama_member"
                        value="<?php echo $member['nama_member']; ?>"
                        >
                    </td>
                </tr>
                <tr>
                    <td>Nomor Member: </td>
                    <td><input
                    type="number"
                    name="nomor_member"
                    value="<?php echo $member['nomor_member'] ?>"
                    >
                    </td>
                </tr>
                <tr>
                    <td>Alamat: </td>
                    <td>
                        <textarea name="alamat">
                            <?php echo $member['alamat']; ?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Mendaftar</td>
                    <td><input
                    type="datetime-local"
                    name="tgl_mendaftar"
                    value="<?php echo $member['tgl_mendaftar'] ?>"
                    >
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Terakhir Membayar</td>
                    <td><input
                    type="date"
                    name="tgl_terakhir_bayar"
                    value="<?php echo $member['tgl_terakhir_bayar'] ?>"
                    >
                    </td>
                </tr>
            </table>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>