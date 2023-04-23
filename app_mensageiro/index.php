<?php 

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;

$msg = new Mensageiro();
echo $msg->enviarToken();