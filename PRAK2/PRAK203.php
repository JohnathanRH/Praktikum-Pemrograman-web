<?php
    include 'TableKonversi.php';
    $units = ["Celsius", "Fahrenheit", "Rheamur", "Kelvin"];
?>
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
        <form action="/prakwebmod2/PRAK203.php" method="post">
            <div>
                Nilai :
                <input type="text" name="unitValue">
            </div>
            <div> Dari :</div>

            <?php
                foreach($units as $unit){
                    echo(<<<EOD
                        <div>
                            <input type="radio" name="from" id="$unit From" value="$unit">
                            <label for="$unit From">$unit</unit>
                        </div>
                    EOD);
                }
            ?>

            <div> Ke :</div>

            <?php
                foreach($units as $unit){
                    echo(<<<EOD
                        <div>
                            <input type="radio" name="to" id="$unit Target" value="$unit">
                            <label for="$unit Target">$unit</unit>
                        </div>
                    EOD);
                }
            ?>

            <button type="submit">Konversi</button>
        </form>
        <br><br>
        <span class="result">
            Hasil Konversi: 
            <?php
                if(!empty($_POST)){
                    $value = $_POST["unitValue"];
                    $from = $_POST["from"];
                    $to = $_POST["to"];

                    echo $conversions[$from][$to]($value);

                    $symbol = ucfirst($to[0]);
                    echo "°$symbol";
                }
            ?>
        </span>
    </body>
</HTML:5>