<?php
    $idcliente = $_POST["idcliente"];
    include("conexao.php");
    if($idcliente != "") {
        $sql = "SELECT * FROM cliente WHERE idcliente = $idcliente";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
        ?>
      <table class="table">
        <tr>
            <th>Nome</th>
            <th>Endereco</th>
            <th>Número</th>
            <th>E-mail</th>
            <th>Senha</th>
        </tr>
<?php
while($row = mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php echo $row["nome"];?></td>
        <td><?php echo $row["endereco"];?></td>
        <td><?php echo $row["numero"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["senha"];?></td>
    </tr>
    <?php
 } echo "</table>";
}else{
    echo "nenhum cliente encontrado ";
    mysqli_close($con);
}
}
?><button>
    <a href="menu.php" class="btn btn-primary">voltar</a></button>
