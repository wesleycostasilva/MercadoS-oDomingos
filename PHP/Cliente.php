<?php
namespace Sistema\PHP;

// Classe Cliente
class Cliente {
  public $nome;
  public $telefone;
  public $endereco;
  public $cpf;
  public $qtdCompras;
  public $valorGasto;
  
  public function __construct($nome, $telefone, $endereco, $cpf, $qtdCompras, $valorGasto) {
    $this->nome = $nome;
    $this->telefone = $telefone;
    $this->endereco = $endereco;
    $this->cpf = $cpf;
    $this->qtdCompras = $qtdCompras;
    $this->valorGasto = $valorGasto;
  }
  
  public function temPromocao() {
    if ($this->qtdCompras >= 10) {
      return true;
    }
    
    return false;
  }
  
  public function valorPromocao() {
    if ($this->temPromocao()) {
      return $this->valorGasto / $this->qtdCompras;
    }
    
    return 0.00;
  }
}

// Armazenando Clientes
$clientes = array();
$clientes[] = new Cliente("Cliente 1", "Telefone 1", "Endereço 1", "CPF 1", 15, 1000.00);
$clientes[] = new Cliente("Cliente 2", "Telefone 2", "Endereço 2", "CPF 2", 9, 500.00);

// Consultando Clientes
foreach ($clientes as $cliente) {
  echo "Nome: " . $cliente->nome . " Telefone: " . $cliente->telefone . " Endereço: " . $cliente->endereco . " CPF: " . $cliente->cpf . " Quantidade de Compras: " . $cliente->qtdCompras . " Valor Gasto: R$ " . $cliente->valorGasto . " Tem Promoção: " . ($cliente->temPromocao() ? "Sim" : "Não") . " Valor da Promoção: R$ " . $cliente->valorPromocao() . "\n";
}
?>