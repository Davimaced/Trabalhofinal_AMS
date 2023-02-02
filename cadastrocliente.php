<?php include_once 'header.php'?>
<div class="container">
  <h2> cadastro cliente</h2>
  <form action="clientecad.php" method="post">
  <div class="form-group">
      <label for="idcliente">Id cliente:</label>
      <input type="text" class="form-control" id="idcliente" placeholder="Id" name="idcliente">
    </div>
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome">
    </div>
    <div class="form-group">
      <label for="endereco">Endereco:</label>
      <input type="text" class="form-control" id="endereco" placeholder="Endereco" name="endereco">
    </div>
    <div class="form-group">
      <label for="numero">Número:</label>
      <input type="text" class="form-control" id="numero" placeholder="Número" name="numero">
    </div>
    <div class="form-group">
      <label for="email">E-mail:</label>
      <input type="text" class="form-control" id="email" placeholder="E-mail" name="email">
    </div>
    <div class="form-group">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha">
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
    <button type="reset" class="btn btn-warning">Limpar</button>
  </form>
</div>
<?php include_once 'footer.php'?>
