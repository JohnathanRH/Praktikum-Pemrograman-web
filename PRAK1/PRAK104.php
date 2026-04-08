<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
    <link rel="stylesheet" href="PRAK104.css">
</head>
<body>
    <table>
        <th>Daftar Smartphone Samsung</th>
        <?php
            $arr = [
                "Samsung Galaxy S22",
                "Samsung Galaxy S22+",
                "Samsung Galaxy A03",
                "Samsung Galaxy Xcover 5"
            ];
            foreach($arr as $phone)
            {
                echo "<tr><td>$phone</td></tr>";
            }
        ?>
    </table>
</body>
</html>