<HTML:5>

    <head>
        <style>
            table, th{
                border: 1px solid black;
            }
        </style>
    </head>

    <body>
        <form action="/prakwebmod2/PRAK201.php" method="post">
            <span>
                Nama 1:
                <input type="text" name="nama1">
            </span><br>
            <span>
                Nama 2:
                <input type="text" name="nama2">
            </span><br>
            <span>
                Nama 3:
                <input type="text" name="nama3">
            </span><br>
            <button type="submit">Urutkan</button>
        </form>
        <br><br>
        <table>
            <?php
                $names = $_POST;
                usort($names, function($x, $y){
                    return strcmp(
                        substr($x, -1),
                        substr($y, -1)
                    );
                });

                foreach($names as $name){
                    if($name != "")
                    echo "<tr><td>$name</td></tr>";
                }
            ?>
        </table>
    </body>
</HTML:5>