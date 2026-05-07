<?php
    $count = 0;
    if(array_key_exists('count', $_POST)){
        $count = $_POST['count'];
    }
    
    if(array_key_exists('operation', $_POST)){
        $count += $_POST['operation'];
    }


?>

<HTML:5>
    <head>
        <style>
            .icon{
                width: 64px;
                height: 64px;
            }
        </style>
    </head>
    <body>
          
        <form action="/prakwebmod3/PRAK304.php" method="post">
            Jumlah bintang
            <?php
            if(empty($_POST)){
                echo<<<HTML
                <input type="text" name="count"><br>
                <button type="submit">Cetak</button>
                HTML;
            } else {
                echo $count."<br>";
                echo '<input type="hidden" name="count" value="'.$count.'">';
                
                for($i = 0; $i < $count; $i++){
                    echo '<img class="icon" src="/prakwebmod3/assets/star.png" alt="icon"> ';
                }

                echo<<<HTML
                <br>
                <button type="submit" name="operation" value="-1">Kurangi</button>
                <button type="submit" name="operation" value="1">Tambah</button>
                HTML;
            }
            ?>
        </form>
    </body>
</HTML:5>