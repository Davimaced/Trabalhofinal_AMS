<?php
//usar sessao -protege o usuario// 
session_start();
include_once 'conexao.php'; 
$email = $_POST['email'];
$senha = $_POST['senha'];
$sql = "select * from cliente where email = '$email' AND senha = '$senha'"; 
$resultado = mysqli_query($con, $sql);
$total = mysqli_num_rows($resultado);
if ($total>0){
$dados = mysqli_fetch_array($resultado);
$_SESSION['cliente']  = $dados['idcliente'];
$_SESSION['cliente_nome']  = $dados['nome'];
$_SESSION['cliente_email']  = $dados['email'];

echo "logado com sucesso";

}else{
    echo "<script> alert ('cliente nao encontrado ');
            location.href='login.php'; </script>" ;
}
mysqli_close($con);
?>
