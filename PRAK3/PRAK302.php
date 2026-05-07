<HTML:5>
    <head>
        <style>
            .main-div{
                width: 300px;
            }
            .row-div{
                display: flex;
                justify-content: flex-end;
            }
            .icon{
                width: 32px;
                height: 32px;
            }
        </style>
    </head>
    <body>
        <form action="/prakwebmod3/PRAK302.php" method="post">
            Tinggi :  
            <input type="text" name="height"><br>
            Alamat Gambar :
            <input type="text" name="imgUrl"><br>
            <button type="submit">Cetak</button>
        </form>

        <div class="main-div">
        <?php
        if(!empty($_POST)){
            $imgUrl = $_POST['imgUrl'];
            $height = $_POST['height'];
            
            while($height > 0){
                $width = $height;

                echo '<div class="row-div">';
                while($width > 0)
                {
                    echo '<img class="icon" src="'.$imgUrl.'" alt="img">';
                    $width--;
                }
                echo '</div>';

                $height--;
            }
        }
        ?>
        </div>
    </body>
</HTML:5>