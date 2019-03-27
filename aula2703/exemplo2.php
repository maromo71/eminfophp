<?php
    //zerar o tabuleiro
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j <3; $j++) { 
            $veia[$i][$j]=" ";
        }
    }
    //tabuleiro da lousa
    $veia[0][0]= "X";
    $veia[0][2]= "0";
    $veia[1][1]= "X";
    $veia[1][2]= "0";
    $veia[2][2]= "X";
    for ($i=0; $i < 3; $i++) { 
        for ($j=0; $j < 3; $j++) { 
             echo "[" . $veia[$i][$j] . "]";
       }
        echo "<br />";
    } 