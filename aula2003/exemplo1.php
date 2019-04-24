<?php
    //Comandos de repetição
    //comando for
    $vetor = [21,14,6,18,10,11,3,51,77,9]; //Mais fácil
   /* for ($i=0; $i < 10; $i++) { 
        echo "$vetor[$i] </br>";
    }
    //Rotina para mostrar os impares
    echo "</br>";
    for ($i=0; $i < 10; $i++) { 
        //verificando se o valor é ímpar
        if ($vetor[$i] % 2 == 1) {
            echo "$vetor[$i] </br>";
        }
    } */

    //Ordenando
    /* for ($i=0; $i < 10; $i++) { 
        for ($j=$i; $j < 10; $j++) { 
            if($vetor[$i] < $vetor[$j]){
                $troca = $vetor[$i];
                $vetor[$i] = $vetor[$j];
                $vetor[$j] = $troca;
            }
        }
    } */
    sort($vetor); //Ordena ordem crescente
    rsort($vetor); //Ordena ordem decrescente
    
    for ($i=0; $i < 10; $i++) { 
        echo "$vetor[$i] </br>";
    }