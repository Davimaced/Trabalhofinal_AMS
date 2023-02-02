<?php 
require "Conexao.class.php";
class Cliente{ 
    public $idcliente;
	public $nome;
    public $endereco;
    public $numero;
    public $email;
    public $senha;
    
    public function autenticarCliente(){
        $pdo = Conexao::conexao();
        $sql = "SELECT email,senha FROM cliente WHERE email = '$this->email' AND senha ='$this->senha'";
        $consulta = $pdo->query($sql);
        $dados = false;
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados = true;
        }
        return $dados;
    }
    
    
    public function inserir(){
    
        $pdo = Conexao::conexao();
        $sql = 'Insert into cliente values(default, :nome, :endereco, :numero, :email, :senha)';
        $stmt = $pdo->prepare($sql);

        $stmt->execute(array(
        ':nome' => $this->nome,
        ':endereco' => $this->endereco,
        ':numero' => $this->numero,
        ':email' => $this->email,
        
    
        ':senha' => $this->senha
         
    ));    
}
    
     public function lista(){
        $pdo = Conexao::conexao();
        
        $sql  = "SELECT * FROM cliente;";
        $consulta = $pdo->query($sql);
        $dados = null;
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
            "idcliente" => $linha['idcliente'],
            "nome" => $linha['nome'],
            "endereco" => $linha['endereco'],
            "numero" => $linha['numero'],
               
            "email" => $linha['email'],    
           
            "senha" => $linha['senha']   
                  
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    
       public function pesquisarPorNome($nome){
        $pdo = Conexao::conexao();
        
        $sql = "SELECT * FROM cliente WHERE nome like '%$nome%'";
        $consulta = $pdo->query($sql);
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $dados[] = array(
                "idcliente" => $linha['idcliente'],
                "nome" => $linha['nome'],
                "endereco" => $linha['endereco'],
                "numero" => $linha['numero'],
              
                "email" => $linha['email'],
                "senha" => $linha['senha'],
                
               
            );     
        }
        $pdo = null;
        return $dados;
    }
    
    public function excluir(){
        $pdo = Conexao::conexao();
        $sql = 'DELETE FROM cliente WHERE idcliente = :idcliente';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array(
            ':idcliente'=>$this->idcliente
        ));        
        
    }
    
 
    
}
    
    
    
    
