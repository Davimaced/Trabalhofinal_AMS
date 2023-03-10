<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Loja em PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Loja Teste Senac</h1>      
    <p>Mysql e PHP</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="produto.php">Produtos</a></li>
        <li><a href="somos.php">Quem somos</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><span class="glyphicon glyphicon-user"></span>Entrar</a></li>
        <li><a href="cadastrocliente.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cadastrar</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php
    include_once 'conexao.php';
	$sql ="SELECT * FROM produto";
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

<footer class="container-fluid text-center">
  <p>Pra??a das Na????es, 384</p>  
  <form class="form-inline">Bonsucesso
    <input type="email" class="form-control" size="50" placeholder="Email Address">
 
  </form>
</footer>

</body>
</html>

