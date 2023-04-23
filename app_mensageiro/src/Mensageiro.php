<?php

namespace src;

use src\Email;

class Mensageiro{

  private $canal;

  public function getCanal(): String{
    return $this->canal;
  }

  public function setCanal(String $canal): Void {
    $this->canal = $canal;
  }

  public function enviarToken(): Void {
    $classe = 'src\\' . ucfirst($this->getCanal());

    $obj = new $classe;
    $obj->enviar();
  }
}