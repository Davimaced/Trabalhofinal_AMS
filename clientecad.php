<?php

$idcliente = $_POST['idcliente'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include_once 'conexao.php';
$sql ="insert into cliente values(null,'".$nome."','".$endereco."','".$numero."','".$email."','".$senha."')";

if(mysqli_query($con, $sql)){
        echo "Gravado com sucesso";
    }else{
        echo "Erro  ao gravar!";
    }
    mysqli_close($con);
    header("Location:http://localhost/php/cadastrocliente.php");
?>
