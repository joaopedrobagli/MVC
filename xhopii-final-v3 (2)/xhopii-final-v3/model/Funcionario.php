<?php

class Funcionario{
    protected $nome;
    protected $sobrenome;
    protected $cpf;
    protected $dataNasc;
    protected $telefone;
    protected $email;
    protected $salario;


    public function __construct($Nome, $sobrenome, $Cpf, $dataNasc, $telefone, $email, $salario)
    {
        $this->nome = $Nome;
        $this->sobrenome = $sobrenome;
        $this->cpf = $Cpf;
        $this->dataNasc = $dataNasc;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->salario = $salario;

    }

    public function get_nome(){
        return($this->nome);
    }

    public function set_nome($Nome){
        $this->nome = $Nome;
    }

    public function get_sobrenome(){
        return($this->sobrenome);
    } 

    public function set_sobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }

    public function get_cpf(){
        return($this->cpf);
    }

    public function set_cpf($Cpf){
        $this->cpf = $Cpf;
    }


    public function get_dataNasc(){
        return($this->datanasc);
    } 

    public function set_dataNasc($dataNasc){
        $this->dataNasc = $dataNasc;
    }
 
    
    public function get_telefone(){
        return($this->telefone);
    }

    public function set_telefone($telefone){
        $this->telefone = $telefone;
    }
    public function get_email(){
        return($this->email);
    }
   
    public function set_email($email){
        $this->email = $email;
    }
    public function set_salario($salario){
        $this->salario = $salario;
    }

    public function get_salario(){
        return($this->salario);
    }
}


?>