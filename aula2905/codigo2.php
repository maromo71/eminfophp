<?php
    $primos = [];

    function ehPrimo($valor){
        $result = true;
        if($valor < 1) $result = false;
        if($valor == 1) $result = true;
        for($i=2; $i < $valor; $i++){
            if($valor % $i == 0) {
                $result = false;
            }
        }
        return $result;
    }
    
    $cont = 0;
    $tentar = 1;
    while($cont < 10){
        if(ehPrimo($tentar)){
            $primos[] = $tentar;
            $cont++;
        }
        $tentar++;
    }
    //Percorrer
    foreach ($primos as $primo) {
        echo "$primo <br >";
    }
