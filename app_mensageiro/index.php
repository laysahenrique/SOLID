<?php 

require __DIR__.'/vendor/autoload.php';

use src\Email;
use src\Mensageiro;
use src\Sms;

$msg = new Mensageiro(new Email());
echo $msg->enviarToken();

$msg = new Mensageiro(new Sms());
echo $msg->enviarToken();