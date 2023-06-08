<?php

class BancoDeDados{
    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    //Métodos
    public function conectarBD(){

        $conexao = mysqli_connect($this->host,$this->login,$this->senha,$this->dataBase);
        return($conexao);
    }

    public function inserirProduto($produto){
        
        $conexao = $this->conectarBD();
        $consulProd= "INSERT INTO produto (nome, fabricante, descricao, valor) 
                     VALUES ('{$produto->get_Nome()}','{$produto->get_Fabricante()}','{$produto->get_Descricao()}','{$produto->get_Valor()}')";
        mysqli_query($conexao,$consulProd);
    }
    
    public function inserirCliente($cliente){
        
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cliente (nome, sobrenome, cpf, dataNascimento, telefone, email, senha) 
                     VALUES ('{$cliente->get_nome()}','{$cliente->get_sobrenome()}', '{$cliente->get_cpf()}','{$cliente->get_datanasc()}','{$cliente->get_telefone()}','{$cliente->get_email()}','{$cliente->get_senha()}')";
        mysqli_query($conexao,$consulta);
    }
    
    
    public function inserirFuncionario($funcionarios){
        
        $conexao = $this->conectarBD();
        $consuFunc = "INSERT INTO funcionario (nome, sobrenome, cpf, dataNasc, telefone, email, salario) 
                     VALUES ('{$funcionarios->get_nome()}','{$funcionarios->get_sobrenome()}', '{$funcionarios->get_cpf()}','{$funcionarios->get_dataNasc()}','{$funcionarios->get_telefone()}','{$funcionarios->get_email()}','{$funcionarios->get_salario()}')";
        mysqli_query($conexao,$consuFunc);
    }
    
    public function retornarClientes(){
    
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao,$consulta);
        return $listaClientes;
    }
    
    public function retornarProdutos(){
        $conexao = $this->conectarBD();
        $consulProd = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao,$consulProd);
        return $listaProdutos;
    }
    public function retornarFuncionarios(){
        $conexao = $this->conectarBD();
        $consuFunc = "SELECT * FROM funcionario";
        $listaFuncionario = mysqli_query($conexao, $consuFunc);
        return $listaFuncionario;
    }

}

?>