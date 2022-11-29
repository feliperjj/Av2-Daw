<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "rent";
    $retorno = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {   
        $nome = $_GET["nome"]; 
        $cidade = $_GET["cidade"]; 
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `carros` WHERE `nome` `cidade` = '$nome'+$cidade";
        $result=$conn->query($sql);
        
        $discp = $result->fetch_assoc();
        
        if ($result=true){
            $retorno=json_encode($discp);

        } else {
            $retorno=json_encode("Erro");
        }
    }
echo $retorno;
?>