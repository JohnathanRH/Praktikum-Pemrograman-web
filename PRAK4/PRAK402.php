<?php
    $grades = [
        "Nama" => ["Andi", "Budi", "Tono", "Jessica"],
        "NIM" => [2101001, 2101002, 2101003, 2101004],
        "Nilai UTS" => [87, 76, 50, 60],
        "Nilai UAS" => [65, 79, 41, 75],
        "Nilai Akhir" => [],
        "Huruf" => []
    ];

    $rowCount = sizeof($grades["Nama"]);

    for($i = 0; $i < $rowCount; $i++){
        $nilai_akhir = ($grades["Nilai UTS"][$i] * 0.4) + ($grades["Nilai UAS"][$i] * 0.6);
        $grades["Nilai Akhir"][$i] = $nilai_akhir;
        $grades["Huruf"][$i] = gradeToChar($nilai_akhir);
    }

    function gradeToChar(float $grade): string{
        if($grade < 50){
            return 'E';
        }
        elseif($grade >= 50 && $grade <= 59){
            return 'D';
        }
        elseif($grade >= 60 && $grade <= 69){
            return 'C';
        }
        elseif($grade >= 70 && $grade <= 79){
            return 'B';
        }
        elseif($grade >= 80){
            return 'A';
        }
        else return '-';
    }
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
        <table>
            <?php
            echo "<tr>";
            foreach($grades as $key => $grade){
                echo "<th>$key</th>";
            }
            echo "</tr>";

            for($i = 0; $i < $rowCount; $i++){
                echo "<tr>";

                foreach($grades as $col){
                    echo "<td>$col[$i]</td>";
                }

                echo "</tr>";
            }
            ?>
        </table>
    </body>
</HTML:5>