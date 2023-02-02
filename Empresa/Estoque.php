<?php
namespace Sistema\Empresa;

// Classe de Produto
class Produto {
  public $nome;
  public $quantidade;
  public $valorUnitario;
  
  public function __construct($nome, $quantidade, $valorUnitario) {
    $this->nome = $nome;
    $this->quantidade = $quantidade;
    $this->valorUnitario = $valorUnitario;
  }
}

// Armazenando Produtos
$produtos = array();
$produtos[] = new Produto("Produto 1", 10, 50.00);
$produtos[] = new Produto("Produto 2", 20, 100.00);
$produtos[] = new Produto("Produto 3", 30, 150.00);

// Consultando Produtos
foreach ($produtos as $produto) {
  echo "Nome: " . $produto->nome . " Quantidade: " . $produto->quantidade . " Valor Unitário: " . $produto->valorUnitario . "<br>";
}

?>