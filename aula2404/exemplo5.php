<?php
    function calcularVolumeCone($altura, $raio){
        $v =  (pi() * pow($raio, 2.0) * $altura) / 3.0;
        return $v;
    }
    $altura = 5;
    $raio = 10;
    $volume = calcularVolumeCone($altura, $raio);
    echo "Volume do cone: $volume";