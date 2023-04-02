<?php
namespace src;

class EmailService{

  private $de;
  private $para;
  private $assunto;
  private $conteudo;

  public function __construct(
    string $de = 'laysafontoura@gmail.com',
    string $para = '',
    string $assunto = '',
    string $conteudo = ''
  ){
    $this->de = $de;
    $this->para = $para;
    $this->assunto = $assunto;
    $this->conteudo = $conteudo;
  }

  public static function dispararEmail(){
    return "--- envia e-mail ---";
  }

}