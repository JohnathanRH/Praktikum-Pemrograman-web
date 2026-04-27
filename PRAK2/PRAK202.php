<?php
    $errors = [];
    $hasError = false;
    if(!empty($_POST)){
        foreach($_POST as $RawKey => $data){
            $key = str_replace("_", " ", $RawKey);

            $errors[$key] = "";
            
            if($data == ""){
                $hasError = true;
                $errors[$key] = "$key tidak boleh kosong";
            }
        }
    }
?>

<HTML:5>

    <head>
        <style>
            table, th{
                border: 1px solid black;
            }
            .error{
                color: red;
            }
        </style>
    </head>

    <body>
        <form action="/prakwebmod2/PRAK202.php" method="post">
            <div>
                Nama :
                <input type="text" name="nama">
                <span class="error">*
                    <?php
                        if(!empty($errors)){
                            echo $errors["nama"];
                        }
                    ?>
                </span>
            </div>
            <div>
                Nim:
                <input type="text" name="nim">
                <span class="error">*
                    <?php
                        if(!empty($errors)){
                            echo $errors["nim"];
                        }
                    ?>
                </span>
            </div>
            <div>
                Jenis Kelamin :
                <span class="error">*
                    <?php
                        if(!empty($errors)){
                            echo $errors["jenis kelamin"];
                        }
                    ?>
                </span>
            </div>
            <input type="hidden" name="jenis kelamin" value="">
            <div>
                <input type="radio" name="jenis kelamin" id="Laki-laki" value="Laki-laki">
                <label for="Laki-laki">Laki-laki</label>
            </div>

            <div>
                <input type="radio" name="jenis kelamin" id="perempuan" value="perempuan">
                <label for="perempuan">Perempuan</label>
            </div>

            <button type="submit">Submit</button>
        </form>

        <br><br>
        <table>
            <?php
                if(!$hasError){
                    foreach($_POST as $item){
                        echo "<tr><td>$item</tr></td>";
                    }
                }
            ?>
        </table>
    </body>
</HTML:5>