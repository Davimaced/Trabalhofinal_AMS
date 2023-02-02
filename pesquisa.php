<?php include_once 'header.php'?>
<?php
include_once 'conexao.php';
$valor_pesquisar = $_GET['pesquisar'];
$sql = "SELECT * FROM produto WHERE  descricao LIKE  '%$valor_pesquisar%'";
$resultado = mysqli_query($con, $sql);
?>
<div class="row">
<?php 
if(mysqli_num_rows($resultado) > 0) {
    while($dados = mysqli_fetch_array($resultado)){
?>         

 <div class="col-sm-3">
    <div class="thumbnail">
    <img src="fotos/<?php echo  $dados['imagem']; ?>" class="w-50 h-50" style="width:35%;height:9.37em;">
    <div class="caption text-center">
    <h3> <?php echo $dados['descricao']; ?></h3>
    <p><?php echo substr($dados['preco'],0,200); ?></p>
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




