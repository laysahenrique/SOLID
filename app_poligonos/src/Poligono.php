<?php

namespace src;

class Poligono{
  private $forma;

  public function setFotma(object $forma): void {
    $this->forma = $forma;
  }

  public function getForma(): object {
    return $this->forma;
  }
  
  public function calculaArea(){
    return $this->getForma()->getAltura() * $this->getForma()->getLargura();
  }

}