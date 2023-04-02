<?php 

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());
$carrinho1->confirmarPedido();
echo 'Valor total: '.$carrinho1->exibirValorTotal();
echo '<br/>';
echo 'status: '.$carrinho1->exibeStatus();

echo '<br/>';

$carrinho1->addItens('Cadeira', 100);
$carrinho1->addItens('Cadeira', 100);
$carrinho1->addItens('Cadeira', 100);

echo '<br/>';
print_r($carrinho1->exibirItens());
echo 'Valor total: '.$carrinho1->exibirValorTotal();

$carrinho1->confirmarPedido();
echo '<br/>';
echo 'status: '.$carrinho1->exibeStatus();