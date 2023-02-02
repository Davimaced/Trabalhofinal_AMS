<?php
    $idcliente = $_POST["idcliente"];
    include("conexao.php");
    if($idcliente != "") {
        $sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
        $linha =mysqli_fetch_array($result);
            $idcliente = $linha["idcliente"];
            $nome = $linha ["nome"];
            $endereco = $linha ["endereco"];
            $numero = $linha ["numero"];
            $email = $linha ["email"];
            $senha = $linha ["senha"];
        }
        ?>
<div class="container">
<div class="form-group">
    
<form method="post" action="altera2.php">

<label for="idcliente">Id Cliente:</label><br>
<input type="text"  name="idcliente" value="<?php echo $idcliente; ?>"/><br>
<label for="nome">Nome:</label><br>
<input type="text" name="nome" value="<?php echo $nome; ?>"/><br>
<label for="endereco">Endereco:</label><br>
<input  type="text" name="endereco" value ="<?php echo $endereco; ?>"/><br>
<label for="numero">Número:</label><br>
<input  type="text" name="numero" value ="<?php echo $numero; ?>"/><br>
<label for="email">Email:</label><br>
<input  type="text" name="email" value ="<?php echo $email; ?>"/><br>
<label for ="senha">senha:</label><br>
<input type="password" name ="senha" value ="<?php echo $senha; ?>"/><br>
<input type="submit" value= "alterar"  class="btn btn-primary"/><br>
</form>
<?php
}else{
echo "nenhum cliente encontrado ";
        mysqli_close($con);
}
?>
</div>
</div>
