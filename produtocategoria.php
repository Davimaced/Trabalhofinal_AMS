<?php include_once 'header.php' ?>
<?php
    include_once 'conexao.php';
	$sql ="SELECT * FROM produto where categoria='brinde' ";
	$stmt = mysqli_query($con, $sql);
    if(mysqli_num_rows($stmt) > 0) {
        while($row = mysqli_fetch_array($stmt)){
    ?>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary"style="text-align:center;">
        <div class="panel-heading">
            
            <?php echo $row['descricao'] ?>
        </div>
        <img src="fotos/<?php echo $row['imagem']?>"style="height:9.37em;width:35%;">
        <br><?php echo $row['categoria']?>
        <br><?php echo 'R$' ?>
        <?php echo $row['preco']?>
    </div>
    </div>
    <?php
     }
    }
    ?>
</div>
</div>

<?php include_once 'footer.php'?>
