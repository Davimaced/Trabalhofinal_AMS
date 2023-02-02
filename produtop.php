<?php
include ('header.php');
include ('conexao.php');
$codproduto = $_REQUEST['codproduto'];
$sql = "select * from produto where codproduto=$codproduto";
$resultado = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($resultado);
 ?>
<hr>
<section class="container">
  <br> <br> <br> <br> <br>
   <div class="row">
    <div class="col-sm-8">
    <img src="fotos/<?=$dados['imagem']; ?>" alt="imagem" class="w-50 h-50">
    </div>
    <div class="col-sm-4">
  
        
        <a class="btn btn-primary" href="carrinho.php?acao=add&codproduto=<?php echo $dados['codproduto']?>" >Acessar</a>
  </div>
</div>
</div>
</section>
<hr>
<?php include "footer.php";?>


