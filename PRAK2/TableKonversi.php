<?php
    $conversions = [
        'Celsius' => [
            'Celsius' => fn($v) => $v,
            'Kelvin' => fn($v) => $v + 273.15,
            'Fahrenheit' => fn($v) => ($v * 9/5) + 32,
            'Rheamur' => fn($v) => $v * 4/5,
        ],
        'Kelvin' => [
            'Celsius' => fn($v) => $v - 273.15,
            'Kelvin' => fn($v) => $v,
            'Fahrenheit' => fn($v) => (($v - 273.15) * 9/5) + 32,
            'Rheamur' => fn($v) => ($v - 273.15) * 4/5,
        ],
        'Fahrenheit' => [
            'Celsius' => fn($v) => ($v - 32) * 5/9,
            'Kelvin' => fn($v) => (($v - 32) * 5/9) + 273.15,
            'Fahrenheit' => fn($v) => $v,
            'Rheamur' => fn($v) => ($v - 32) * 4/9,
        ],
        'Rheamur' => [
            'Celsius' => fn($v) => $v * 5/4,
            'Kelvin' => fn($v) => ($v * 5/4) + 273.15,
            'Fahrenheit' => fn($v) => ($v * 9/4) + 32,
            'Rheamur' => fn($v) => $v
        ]
    ];
?>