<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: form-cliente.php");
    
   // Variáveis ligando ao formulário
$nome = $_POST['nome'];
    if($nome=="") throw new Exception("nome Inválido!");
    
$email = $_POST['email'];
    if($email=="") throw new Exception("Email Inválido!");
    
$endereco = $_POST['endereco'];
    if($endereco=="") throw new Exception("endereco Inválido!");
	
$numero = $_POST['numero'];
    if($numero=="") throw new Exception("Numero Inválido!");
	
$senha = $_POST['senha'];
    if($senha=="") throw new Exception("Senha Inválida!");
	
	
	
	
   
// inclue a conexao e faz a instancia (padrão) // 
require_once "cliente.class.php";

    $cliente = new cliente(); 
	$cliente->nome = $nome;
	$cliente->email = $email;
	$cliente->endereco = $endereco;
    $cliente->numero = $numero;
        if($cliente->loginExiste()) throw new Exception ("O Usuário já existe!");
    $cliente->senha = $senha;
    $cliente->inserir();    	
	
    
   
    $msg = "Cadastrado com sucesso";

}catch(PDOException $e){
    $msg = "Contate o administrador";   
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}

?>
    
    
   <?php require "includes/header.php" ?>

<?php $title ="Cadastro"; ?>

<section class="container">
    
    <?php echo $msg; ?>
    
</section>


    <?php require "includes/footer.php" ?>
	
	
	