<?php
    $jari = 4.2;
    $tinggi = 5.5;  
    $hasil = pi() * pow($jari, 2) * $tinggi;
    $formatted = number_format($hasil, 3);

    echo "$formatted m3"
?>