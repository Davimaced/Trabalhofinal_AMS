<?php
    session_start();
    require "cliente.class.php";
    
    try{
    
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        $cliente = new cliente();
        $cliente->login = $login;
        $cliente->senha = $senha;
        
        if(!$cliente->autenticarUsuario()) throw new Exception("Usuário Inválido");
		
        
		 
        $msg = "Usuário Autenticado";
        $_SESSION['login'] = $cliente->login;
        header("location: index.php");
     
    }catch(Exception $e){
        $msg = $e->getMessage();
    }

?>

<?php echo $msg; ?>