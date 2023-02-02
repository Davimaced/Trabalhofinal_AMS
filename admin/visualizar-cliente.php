<?php
	include_once("conexao.php");
	$idcliente = $_GET['idcliente'];
	//Buscar os dados referente ao cliente situado neste id
	$result_cliente= "SELECT * FROM cliente WHERE idcliente = '$idcliente' LIMIT 1";
	$resultado_cliente = mysqli_query($conn, $result_cliente);
	$row_cliente = mysqli_fetch_assoc($resultado_cliente);	
?>

<?php include "includes/header.php" ?>

<div class="col-md-10">
		  	<div class="row">
		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">
				  <h1>Visualizar Cliente</h1>
			</div>
			
			
			<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  	<div class="panel-body">
					<a href="cliente-lista.php">
						<button type='button' class='btn btn-sm btn-success'>Listar</button>
					</a>
					
					<a href="editar-cliente.php?idcliente=<?php echo $row_cliente['idcliente']; ?>">
						<button type="button" class="btn btn-sm btn-warning">
							Editar
						</button>
					</a>
					
					<a href="cliente-excluir.php?idcliente=<?php echo $row_cliente['idcliente']; ?>">
						<button type="button" class="btn btn-sm btn-danger">
							Apagar
						</button>
					</a>
				
			
			<dl class="dl-horizontal">	
			<br><br>	<dt>Id Cliente: </dt>
				<dd><?php echo $row_cliente['idcliente']; ?></dd>
				<dt>Nome: </dt>
				<dd><?php echo $row_cliente['nome']; ?></dd>
				<dt>Endereço: </dt>
				<dd><?php echo $row_cliente['endereco']; ?></dd>
				<dt>Número: </dt>
				<dd><?php echo $row_cliente['numero']; ?></dd>
				<dt>E-mail: </dt>
				<dd><?php echo $row_cliente['email']; ?></dd>
			
				<dt>Senha: </dt>
				<dd><?php echo $row_cliente['senha']; ?></dd>
				
			</dl>
			
				</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
		</section>
		
<?php include "includes/footer.php" ?>