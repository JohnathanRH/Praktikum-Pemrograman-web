<?php
    $celsius = 37.841;
    
    $fahrenheit = number_format($celsius * 1.8 + 32, 4);
    $reamur = number_format($celsius * 0.8, 4);
    $kelvin = number_format($celsius + 273.15, 4);

    echo ("
        Fahrenheit (F) = $fahrenheit<br>
        Reamur (R) = $reamur<br>
        Kelvin (K) = $kelvin<br>
    ");
?>