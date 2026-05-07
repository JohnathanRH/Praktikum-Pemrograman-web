<HTML:5>
    <head>
        <style>
            .result{
                margin-top: 25px    ;
                font-size: xx-large;
                font-weight: bold;
            }
            .red{color: red;}
            .green{color: green;}
        </style>
    </head>
    <body>
        <form action="/prakwebmod3/PRAK301.php" method="post">
            Jumlah peserta: 
            <input type="text" name="count"><br>
            <button type="submit">Cetak</button>
        </form>

        <?php
            if(!empty($_POST)){
                $i = 1;
                while($i <= $_POST['count']){
                    if($i % 2 == 0){
                        echo<<<HTML
                            <div class='green result'> Peserta ke-$i </div>
                        HTML;
                    }
                    else{
                        echo<<<HTML
                            <div class='red result'> Peserta ke-$i </div>
                        HTML;
                    }
                    $i++;
                }
            }
        ?>

    </body>
</HTML:5>