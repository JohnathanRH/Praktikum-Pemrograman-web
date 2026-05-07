<HTML:5>
    <head>
        <style>
            .icon{
                width: 24px;
                height: 24px;
            }
        </style>
    </head>
    <body>
        <form action="/prakwebmod3/PRAK303.php" method="post">
            Batas Bawah :  
            <input type="text" name="low"><br>
            Batas Atas :
            <input type="text" name="high"><br>
            <button type="submit">Cetak</button>
        </form>
        <div>
            <?php
            if(!empty($_POST)){
                $low = $_POST['low'];
                $high = $_POST['high'];
                do{
                    if(($low + 7) % 5 == 0){
                        echo '<img class="icon" src="/prakwebmod3/assets/star.png" alt="icon"> ';
                    }
                    else{
                        echo "$low ";
                    }
                    $low++;
                } while($low <= $high);
            }
            ?>
        </div>
    </body>
</HTML:5>