<?php 

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;

$pedido = new Pedido();
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta');
$item1->setValor(1.99);

$item2->setDescricao('Janela');
$item2->setValor(2.99);

$pedido->getCarrinhoCompra()->addItens($item1);
$pedido->getCarrinhoCompra()->addItens($item2);

echo '<h4>Pedido</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';

echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';

echo '<h4>Valor do pedido</h4>';

$total = 0;
foreach($pedido->getCarrinhoCompra()->getItens() as $key => $item){
  $total += $item->getValor();
}
echo $total;

echo '<h4>Carrinho valido?</h4>';
print_r($pedido->getCarrinhoCompra()->validarCarrinho());

echo '<h4>Status do Pedido</h4>';
print_r($pedido->getStatus());

echo '<h4>Confirmar Pedido</h4>';
print_r($pedido->confirmar());

echo '<h4>Status do Pedido</h4>';
print_r($pedido->getStatus());

echo '<h4>E-mail</h4>';
if($pedido->getStatus() == 'confirmado'){
  echo EmailService::dispararEmail();
}

