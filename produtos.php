
<?php include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Comércio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="col-4" id="projects">
    <h3 class="col-4">Produtos:</h3>
      <!--Imagens diretas do banco-->
       <?php
        $con = mysqli_connect("localhost", "root", "",'comercio');
		$sql ="SELECT * FROM produto";
		$stmt = mysqli_query($con, $sql);
        if(mysqli_num_rows($stmt) > 0) {
            while($row = mysqli_fetch_array($stmt)){
        ?>
    <div class="thumbnail">
			<br>
<img src="fotos/<?php echo $row['imagem'] ?>" alt="<?php echo $row['imagem'] ?>" style="height:150px;width:30%;">
<div class="caption text-center">
 <h3><?php echo $row[''] ?></h3>
<p><br/><strong></strong>: <?php echo $row[''] ?><br><br>
  <strong></strong>:<?php echo $row['']?>
 </p>
</div>
 </div>
 </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal-<?php echo $row['codproduto'] ?>" tabindex="-<?php echo $row['codproduto'] ?>" role="dialog" aria-labelledby="myModalLabel-<?php echo $row['codproduto'] ?>">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
   <div class="modal-header">
  <button type="button" class="btn btn-warning" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
   <h4 class="modal-title" id="myModalLabel-">
    <?php echo $row[''] ?>
   <?php echo $row['']?>
	<?php echo $row['']?></h4>
   </div>
    <div class="modal-body">
    <strong></strong>: $<?php echo $row[''] ?><br/>
	<strong></strong>: $<?php echo $row[''] ?><br/>
	<?php echo $row['preco'] ?>
				
      </div>
     </div>
  </div>
   </div>
    <?php
   }
  }
   ?>
        </div>
    </div>

    <?php include_once 'footer.php'?>


