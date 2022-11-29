<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "rent";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $tipo= $_GET["tipo"];
        $ano= $_GET["ano"];
        $preco = $_GET["preco"];
        $cidade= $_GET["cidade"];
        
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="INSERT INTO `carro`(`nome`, `tipo`, `ano`,`preco`,`cidade`) VALUES ('$nome', '$tipo', '$ano','$preco','$cidade')";
        $result=$conn->query($sql);
    }
?>
