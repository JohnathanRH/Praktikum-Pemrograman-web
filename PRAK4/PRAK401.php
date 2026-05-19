<?php
    $length = $_POST['length'];
    $width = $_POST['width'];
    $arr = explode(' ', $_POST['values']);
    $error = "";

    $error = (sizeof($arr) != $length * $width) ? "Panjang nilai tidak sesuai dengan ukuran matriks" : null;
?>

<HTML:5>
    <head>
        <style>
            th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
            table{
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
        <form action="PRAK401.php" method="post">
            Panjang : <input type="text" name="length"> <br>
            Lebar : <input type="text" name="width"> <br>
            Nilai : <input type="text" name="values"> <br>
            <button type="submit">Cetak</button>
        </form>
        <table>
            <?php
            if($error != null){
                echo $error;
            }
            else{
                $count = 0;

                for($i = 0; $i < $length; $i++){
                    echo "<tr>";

                    for($j = 0; $j < $width; $j++){
                        if($count == sizeof($arr)){break;}
                        echo<<<HTML
                        <td>
                            $arr[$count]
                        </td>
                        HTML;
                        $count++;
                    }

                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</HTML:5>