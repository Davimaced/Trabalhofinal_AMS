<?php include_once 'header.php'?>
<div class="container">
<h2> Tela de Login</h2>
<br> <br>
<form method="post" action='admc/fazlogin.php' name='log'
 class="form-horizontal">

<div class="form-group">
  <label class="control-label col-sm-2" >E-mail:</label>
  <div class="col-sm-10">
<input type="email"class="form-control" name="email" id="email" placeholder="Digite seu email">
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" >Senha:</label>
<div class="col-sm-10"> 
<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
    </div>
  </div>
 
<div class="form-group"> 

<div class="control-label col-sm-2"> 
<br><br>
<button type="submit" name="entrar" value="Entrar" 

class="btn btn-primary">Entrar</button>
    </div>
<div class="col-sm-10"> 
<br><br>
    <button type="reset" class="btn btn-warning">Warning</button>
  </div>
  </div>
  <br><br><br><br>
<?php include_once'footer.php'?>