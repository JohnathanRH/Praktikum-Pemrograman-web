<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <link rel="stylesheet" href="PRAK105.css">
</head>
<body>
    <table>
        <th>Daftar Smartphone Samsung</th>
        <?php
            $arr = [
                "SGS22" => "Samsung Galaxy S22",
                "SG22P" => "Samsung Galaxy S22+",
                "SGA03" => "Samsung Galaxy A03",
                "SGXc5" => "Samsung Galaxy Xcover 5"
            ];
            foreach($arr as $phone)
            {
                echo "<tr><td>$phone</td></tr>";
            }
        ?>
    </table>
</body>
</html>