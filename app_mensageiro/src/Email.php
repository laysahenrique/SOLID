<?php

namespace src;

class Email implements IMensagemToken{
  public function enviar(): Void {
    echo 'Email: Seu Token é XXXX';
  }
}