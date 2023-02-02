<?php
	include_once("conexao.php");
	$idcliente= $_GET['idcliente'];
	//Buscar os dados referente ao usuario situado neste id
	$result_cliente = "SELECT * FROM cliente WHERE idcliente = '$idcliente' LIMIT 1";
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
				  <h1>Editar Cliente</h1>
			</div>
			
			
			<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  	<div class="panel-body">
			<form class="form-horizontal" method="POST" action="processar_editar_cliente.php" enctype="multipart/form-data">
			
				<div class="form-group">
					<label class="col-sm-2 control-label">Nome</label>
					<div class="col-sm-10">
						<input type="text" name="nome" class="form-control" id="inputEmail3" placeholder="Nome Completo" value="<?php echo $row_cliente['nome']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Endereço</label>
					<div class="col-sm-10">
						<input type="text" name="endereco" class="form-control" id="inputEmail3" placeholder="endereço" value="<?php echo $row_cliente['endereco']; ?>">
					</div>
				</div>
		
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Número</label>
					<div class="col-sm-10">
						<input type="text" name="numero" class="form-control" id="inputEmail3" placeholder="Número e complemento" value="<?php echo $row_cliente['numero']; ?>">
					</div>
				</div>
			
				
		
				
				<div class="form-group">
					<label class="col-sm-2 control-label">E-mail</label>
					<div class="col-sm-10">
						<input type="email" name="email" class="form-control" id="inputEmail3" placeholder="E-mail" value="<?php echo $row_cliente['email']; ?>">
					</div>
				</div>	
			
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Senha</label>
					<div class="col-sm-10">
						<input type="password" name="senha" class="form-control" id="inputEmail3" placeholder="E-mail" value="<?php echo $row_cliente['senha']; ?>">
					</div>
				</div>
				
					
				<input type="hidden" name="idcliente" value="<?php echo $row_cliente['idcliente']; ?>">
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-warning">Alterar</button>
					</div>
				</div>
			</form>
					</div>
		  		</div>		  		
		  	</div> 	
		  </div>
		</div>
    </div>
		</div>
<?php include "includes/footer.php" ?>