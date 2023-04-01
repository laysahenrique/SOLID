<?php
namespace src;

class CarrinhoCompra{
    
    private $itens;
    private $status;
    private $valorTotal;

    public function __construct(){
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(){
        return $this->itens;
    }

    public function addItens(string $item, float $valor){
        array_push($this->itens, ["Item: " => $item, "Valor: " => $valor]);
    }

}
    