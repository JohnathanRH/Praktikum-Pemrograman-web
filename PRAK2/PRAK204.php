<HTML:5>

    <head>
        <style>
            .result{
                font-weight: bold;
                font-size: 32px;
            }
        </style>
    </head>

    <body>
        <form action="/prakwebmod2/PRAK204.php" method="post">
            <div>
                Nilai :
                <input type="text" name="value">
            </div>

            <button type="submit">Konversi</button>
        </form>
        <br><br>
        <span class="result">
            Hasil: 
            <?php
                if (!empty($_POST)) {
                    $value = $_POST["value"];

                    switch (true) {
                        case ($value == 0):
                            echo "Nol";
                            break;

                        case ($value >= 1 && $value <= 9):
                            echo "Satuan";
                            break;

                        case ($value >= 10 && $value <= 99):
                            echo "Puluhan";
                            break;

                        case ($value >= 100 && $value <= 999):
                            echo "Ratusan";
                            break;

                        default:
                            echo "Anda Menginput Melebihi Limit Bilangan";
                            break;
                    }
                }
            ?>
        </span>
    </body>
</HTML:5>