<?php

namespace src\extrator;

class Arquivo {
  private $dados = array(); 

  public function setDados(string $nome, string $cpf, string $email): void {
    array_push(
      $this->dados, 
      [
        'Nome' => iconv('iso-8859-1','utf-8', $nome), 
        'CPF' => $cpf, 
        'E-mail' => $email
      ]);
  }

  public function getDados(): array{
    return $this->dados; 
  }
}