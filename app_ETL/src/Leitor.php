<?php

namespace src;

use src\Arquivo;

class Leitor{
  private $diretorio;
  private $arquivo;

  public function getDiretorio(): String{
    return $this->diretorio;
  }

  public function getArquivo(): String{
    return $this->arquivo;
  }


  public function setDiretorio(string $diretorio): void{
    $this->diretorio = $diretorio;
  }

  public function setArquivo(string $arquivo): void{
    $this->arquivo = $arquivo;
  }

  public function lerArquivo(): array{
    $caminho = $this->getDiretorio().'/'.$this->getArquivo();

    $extensao = explode('.', $this->getArquivo());

    $arquivo = new Arquivo();

    if ($extensao[1] == 'csv'){
      $arquivo->lerArquivoCSV($caminho); 
    }else if ($extensao[1] == 'txt'){
      $arquivo->lerArquivoTXT($caminho); 
    }

    return $arquivo->getDados();

  }
}