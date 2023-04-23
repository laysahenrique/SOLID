<?php

namespace src;

use src\Email;

class Mensageiro{

  private $canal;

  public function __construct(IMensagemToken $canal){
    $this->setCanal($canal);
  }

  public function getCanal(): IMensagemToken{
    return $this->canal;
  }

  public function setCanal(IMensagemToken $canal): Void {
    $this->canal = $canal;
  }

  public function enviarToken(): Void {
    $this->getCanal()->Enviar();
  }
}