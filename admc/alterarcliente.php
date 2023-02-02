<?php
include "header.php";
?>
  <?php
// Conexão com o banco de dados
require_once 'conexao.php';
	
	if(isset($_GET['idcliente']) && !empty($_GET['idcliente']))
	{
		
	$idcliente = $_REQUEST['clienteidcliente'];
		$sql = "select * from cliente where idcliente=$idcliente";
		$consulta = mysqli_query($con, $sql);
		$dados = mysqli_fetch_array($consulta);
	}
	else{
		echo "Cliente não cadastrado";
	}
	if (isset($_GET['alterar'])) {
		// Recupera os dados dos campos
		$nome = $_GET['nome'];
		
		$endereco = $_GET['endereco'];
		$numero = $_GET['numero'];
		
		$email = $_GET['email'];
		$senha = $_GET['senha'];
		
	$sql = "UPDATE cliente SET nome = '$nome',endereco = '$endereco', numero = '$numero', email = '$email', senha = '$senha' WHERE idcliente= $idcliente'";


			$consulta = mysqli_query($conexao, $sql);
			// Se os dados forem inseridos com sucesso
			if ($sql){
					echo "
				<script type=\"text/javascript\">
					alert(\"Alterado com Sucesso.\");
				</script>
			";
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
		}
	}
?>
<body>
<div class="container">
  <h2>Alterar  cliente</h2>
  
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" enctype="multipart/form-data" name="alterar" >

    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" value="<?php echo $nome; ?>" name="nome">
    </div>
	
<div class="form-group">
      <label for="endereco">Endereço:</label>
<input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" readonly/>
</div> 		
<div class="form-group">
      <label for="numero">Número:</label>
<input type="text" class="form-control" id="numero" value="<?php echo $numero; ?>" placeholder="Número" name="numero">
</div> 

<label for="email">E-mail:</label>
<input type="email" value="<?php echo $email; ?>" class="form-control" id="email" placeholder="E-mail" name="email"></div>

<div class="form-group">
<label for="senha">Senha:</label>
<input type="password"  value="<?php echo $senha; ?>"class="form-control" id="senha" placeholder="Senha" name="senha"></div>




<input type="submit" name="alterar" class="btn btn-primary"value="Alterar"/>
<button type="reset" class="btn-primary">Limpar</button>
</form>
</div>
<script src="js/cep.js" type="text/javascript"></script>
<?php include "footer.php"; ?>
