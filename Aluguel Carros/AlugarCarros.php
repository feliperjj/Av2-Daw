<?php
   
     $servidor = "localhost";
     $user = "root";
     $pass = "";
     $banco = "rent";
     if($_SERVER["REQUEST_METHOD"]=="GET")
     {    
         $nome = $_GET["nome"];
         $cpf= $_GET["cpf"];
         $periodo= $_GET["periodo"];
         
         
         
         $conn = new mysqli ($servidor, $user, $pass, $banco);
         $sql="INSERT INTO `alugados`(`nome`, `cpf`, `periodo`) VALUES ('$nome', '$cpf', '$dataInicio','$periodo')";
         $result=$conn->query($sql);
     }
 ?>


      