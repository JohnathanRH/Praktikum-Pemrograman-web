<?php
    $arr = [
        "Ridho" => [
            "Pemrograman I" => 2,
            "Praktikum Pemrograman I" => 1,
            "Pengantar Lingkungan Lahan Basah" => 2,
            "Arsitektur Komputer" => 3
        ],
        "Ratna" => [
            "Basis Data I" => 2,
            "Praktikum Basis Data I" => 1,
            "Kalkulus" => 3
        ],
        "Tono" => [
            "Rekayasa Perangkat Lunak" => 3,
            "Analisis dan Perancangan Sistem" => 3,
            "Komputasi Awan" => 3,
            "Kecerdasan Bisnis" => 3
        ]
    ];

    foreach($arr as $key => $matkuls){
        $sum = array_sum($matkuls);
        $arr[$key]["totalSks"] = $sum;
        
        if($sum > 7){
            $arr[$key]["keterangan"] = "Tidak Revisi";
        }
        else{
            $arr[$key]["keterangan"] = "Revisi KRS";
        }
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
            .revisi{
                background: red;
            }
            .tdkRevisi{
                background: #1aff00;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
            <?php
            $num = 1;
            foreach($arr as $key => $item){
                echo "<tr>";
                
                $firstKey = array_key_first($item);
                $firstVal = $item[$firstKey];
                $totalSks = $item["totalSks"];
                $keterangan = $item["keterangan"];

                echo<<<HTML
                <td>$num</td>
                <td>$key</td>
                <td>$firstKey</td>
                <td>$firstVal</td>
                <td>$totalSks</td>
                HTML;
                if($keterangan == "Revisi KRS"){
                    echo<<<HTML
                    <td class="revisi">$keterangan</td>
                    HTML;
                }
                else{
                    echo<<<HTML
                    <td class="tdkRevisi">$keterangan</td>
                    HTML;
                }

                echo "</tr>";
                $num++;

                $count = 0;
                foreach($item as $kunci => $benda){
                    if($count == 0){
                        $count++;
                        continue;
                    }
                    echo<<<HTML
                    <tr>
                        <td></td>
                        <td></td>
                        <td>$kunci</td> 
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    HTML;
                }

            }

            ?>
        </table>
    </body>
</HTML:5>