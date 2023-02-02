<?php

    $idcliente = $_POST["idcliente"];
    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
?>

<h1> o seguinte cadastro foi alterado com sucesso!</h1>
    idcliente :<?php echo $idcliente; ?><br />
    Nome :<?php echo $nome; ?><br />   
    Endereco :<?php echo $endereco; ?><br />
    Número :<?php echo $numero; ?><br />
    Email :<?php echo $email; ?><br />
    Senha :<?php echo $senha; ?><br />
    <?php
    include_once 'conexao.php';
        $sql = "UPDATE cliente  set nome = '$nome', endereco = '$endereco', numero = '$numero', email= '$email', senha = '$senha' where idcliente ='$idcliente'";
        
        $consulta = mysqli_query($con,$sql);
    ?>
    <hr size= "1" color="#cccc"/>
    <A href="menualtera.php"> voltar e alterar outro cadastro</a>
