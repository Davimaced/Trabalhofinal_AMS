<?php
	include_once("conexao.php");
	$id = $_GET['idcliente'];
	//Buscar os dados referente ao usuario situado neste id
	$result_cliente = "SELECT * FROM cliente WHERE id_cliente = '$idcliente' LIMIT 1";
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
				  <h1>Visualizar cliente</h1>
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
					
					<a href="editar-cliente.php?id=<?php echo $row_cliente['pk_cliente']; ?>">
						<button type="button" class="btn btn-sm btn-warning">
							Editar
						</button>
					</a>
					
					<a href="cliente-excluir.php?id=<?php echo $row_cliente['pk_cliente']; ?>">
						<button type="button" class="btn btn-sm btn-danger">
							Apagar
						</button>
					</a>
				
			
			<dl class="dl-horizontal">	
			<br> <br>
				<dt>Idcliente: </dt>
				<dd><?php echo $row_cliente['id_cliente']; ?></dd>
				<dt>Nome: </dt>
				<dd><?php echo $row_cliente['nome']; ?></dd>
				<dt>ENDERECO: </dt>
				<dd><?php echo $row_cliente['endereco']; ?></dd>
				<dt>E-mail: </dt>
				<dd><?php echo $row_cliente['email']; ?></dd>
				
				<dt>NUMERO: </dt>
				<dd><?php echo $row_cliente['numero']; ?></dd>
				
				<dt>Senha: </dt>
				<dd><?php echo $row_cliente['senha']; ?></dd>
				<dt>Inserido: </dt>
				<dd><?php 
					if(isset($row_cliente['created'])){
						$inserido = $row_niveis_acessos['created'];
						echo date('d/m/Y H:i:s', strtotime($inserido)); 
					}?>
				</dd>
			</dl>
		
				</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
		</section>
		
<?php include "includes/footer.php" ?>