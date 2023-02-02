<?php
    include_once 'header.php';
    include_once 'conexao.php';
    $sql = 'Select * from produto';
    $stmt = mysqli_query($con,$sql);
    if(mysqli_num_rows($stmt) > 0){
    while ($row = mysqli_fetch_array($stmt)){
?>
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-3">
  <h3> <?php echo $row ['descricao'] ?><h3>
<img src="fotos/<?php echo $row['imagem']?>"
style="width:59%;height:6em;">
<h4><?php echo ' ' ?>
<h4>     </h4><br>
</div>
<?php
  }
}
?>
</div>
</div>
<?php include_once 'footer.php';?>