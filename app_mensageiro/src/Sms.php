<?php

namespace src;

use interface\IMensagemToken;

class Sms implements IMensagemToken{
  public function enviar(): Void {
    echo 'Sms: Seu Token é XXXX';
  }
}