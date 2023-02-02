<?php
  namespace Sistema\PHP
    class funcionario extends Pessoa{
    public function __construct(string $codigo , string $nome, string $telefone, Endereco $endereco, string $sexo, float
    $salario, string $bairro){
        parent::__construct($codigo,$nome,$telefone,$endereco); 
        $this->sexo = $sexo;
        $this->salario  = $salario; 
        $this->bairro  = $bairro; 
    }//fim da class funcionario    
     }//fim do construtor

