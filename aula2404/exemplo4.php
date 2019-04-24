<?php
    function calcularVolumeEsfera($raio){
        $v = 4 / 3.0 * pi() * pow($raio, 3.0);
        return $v;
    }
    $raio = 10.0;
    $volume = calcularVolumeEsfera($raio);
    echo "O Volume da Esfera: $volume";