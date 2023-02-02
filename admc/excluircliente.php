<?php
include('conexao.php');

$idcliente = $_REQUEST['clienteidcliente'];

$sql = "delete from cliente where idliente=$idcliente";

$resultado = mysqli_query($conexao, $sql);
echo $idcliente;
if ($resultado==0){
	
   echo "Não foi possível excluir";
   
}else{
	 echo "Excluido com sucesso";
   header("Location: listacliente.php");
}


?>
