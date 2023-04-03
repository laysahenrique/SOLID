<?php

use PHPUnit\Framework\TestCase;
use src\Item;

use function PHPUnit\Framework\assertEmpty;
use function PHPUnit\Framework\assertEquals;

class ItemTest extends TestCase{
  public function testeEstadoInicialItem(){
    $item = new Item();

    $this->assertEquals('', $item->getDescricao());
    $this->assertEquals(0, $item->getValor()); 
  }

  public function testeGetSetDescricao(){
    $descricao = "Cadeira";
    $item = new Item();
    $item->setDescricao($descricao);
    $this->assertEquals($descricao, $item->getDescricao());
  }

  public function testeGetSetValor(){
    $valor = 10;
    $item = new Item();
    $item->setValor($valor);
    $this->assertEquals($valor, $item->getValor());
  }

  public function testeItemValido(){
    $item = new Item();
    $item->setValor(10);
    $item->setDescricao('Cadeira');
    $this->assertEquals(true, $item->itemValido());

    $item->setValor(10);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());

    $item->setValor(0);
    $item->setDescricao('Cadeira');
    $this->assertEquals(false, $item->itemValido());

    $item->setValor(0);
    $item->setDescricao('');
    $this->assertEquals(false, $item->itemValido());
  }

}