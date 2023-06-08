<?php
require_once("../model/BancoDeDados.php");
require_once("../model/Funcionario.php");
require_once("../model/Cliente.php");
require_once("../model/Produto.php");


class Controlador{

    //Atributo
    private $bancoDeDados;

    function __construct(){
        $this->bancoDeDados = new BancoDeDados("localhost","root","","xhopii");
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor){

        $produto = new Produto($nome,$fabricante,$descricao,$valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    public function cadastrarCliente($nome, $sobrenome, $cpf, $dataNasc, $telefone, $email, $senha){
        $cliente  = new Cliente($nome, $sobrenome, $cpf, $dataNasc, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }

    public function cadastrarFuncionario($nome, $sobrenome,  $cpf, $dataNasc, $telefone, $email, $salario){
        $funcionarios = new Funcionario($nome, $sobrenome,  $cpf, $dataNasc, $telefone, $email, $salario);
        $this->bancoDeDados->inserirFuncionario($funcionarios);
    }

    public function visualizarProdutos(){
        $prod="";
        $listaProdutos = $this->bancoDeDados->retornarProdutos();
        while($produto = mysqli_fetch_assoc($listaProdutos)){
            $prod .= "<section class=\"conteudo-bloco\">" .
                   "<h2>" . $produto["nome"] . "</h2>" .
                   "<p>Fabricante: " . $produto["fabricante"] . "</p>" .
                   "<p>Descrição: " . $produto["descricao"] . "</p>" . 
                   "<p>Valor: " . $produto["valor"] . "</p>" .
                   "</section>";
        }
        return $prod;
    }

    public function visualizarClientes(){

        $cli = "";

        $listaClientes = $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            $cli .= "<section class=\"conteudo-bloco\">
            <h2>".$cliente['nome'].$cliente['sobrenome']."</h2>
            <a>Cpf: ".$cliente['cpf']."</a><br>
            <a>Data de Nascimento: ".$cliente['dataNascimento']."</a><br>
            <a>Telefone: ".$cliente['telefone']."</a><br>
            <a>Email: ".$cliente['email']."</a><br>
            <a>Senha: ".$cliente['senha']."</a>
            </section>";
        }
        return $cli;
    }

    public function visualizarFucionario(){

        $func = "";
        $listaFuncionario = $this->bancoDeDados->retornarFuncionarios();
        while($funcionarios = mysqli_fetch_assoc($listaFuncionario)){
            $func .= "<section class=\"conteudo-bloco\">
            <h2>".$funcionarios['nome'].$funcionarios['sobrenome']."</h2>
            <a>Cpf: ".$funcionarios['cpf']."</a><br>
            <a>Data de nascimento:".$funcionarios['dataNasc']."</a><br>
            <a>Telefone:".$funcionarios['telefone']."</a><br>
            <a>Email: ".$funcionarios['email']."</a><br>
            <a>Salario: ".$funcionarios['salario']."</a>
            </section>";
        }
        return $func;

    }

}

?>