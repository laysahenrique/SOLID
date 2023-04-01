<?php 

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());

$carrinho1->addItens('Cadeira', 100);

print_r($carrinho1->exibirItens());
