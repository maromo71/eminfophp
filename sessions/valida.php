<?php
   $email = $_SESSION["email"];
   $senha = $_SESSION["senha"];
   if(!($email=="adm@empresa.com" && $senha=="adm")){
    //destruir a sessão 
    session_destroy();
     header("Location: index.php");
   }
   
?>