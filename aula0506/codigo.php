<?php
    class Loja{
        var $itens;

        function adiciona($produto, $quantidade){
            if(isset($this->itens[$produto])){
                $this->itens[$produto] += $quantidade;
            }else{
                $this->itens[$produto] = $quantidade;
            }
        }

        function remove($produto, $quantidade){
            if($this->itens[$produto] > $quantidade){
                $this->itens[$produto] -= $quantidade;
                return true;
            }else{
                return false;
            }
        }
    }
    $estoque = new Loja;
    echo "ola, uso de classes. <br />";
    $estoque->adiciona("bermuda", 10);
    $estoque->adiciona("camiseta", 5);
    $estoque->adiciona("calça", 2);
    $estoque->remove("bermuda", 2);
    echo "<h1>";
    foreach ($estoque->itens as $produto => $quantidade) {
        echo "O produto $produto tem $quantidade em estoque<br/>";
    }
    echo "</h1>";