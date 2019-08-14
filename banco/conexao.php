<?php
    $username = 'root';
    $password = '1234';
    try{
        $conn = new PDO
        ('mysql:host=localhost;dbname=ESCOLA',
        $username,
        $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'Aconteceu o erro: ' 
        . $e->getMessage();
    }