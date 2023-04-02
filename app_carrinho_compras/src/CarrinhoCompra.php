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
        $this->valorTotal += $valor;
        return true;
    }

    public function exibirValorTotal(){
        return $this->valorTotal;
    }

    public function exibeStatus(){
        return $this->status;
    }

    public function confirmarPedido(){
        if ($this->itens != null) {
            $this->status = 'Confirmado';
            $this->enviarEmailConfirmado( );
        }else{  
            echo '<br/> Nenhum item no carrinho.<br/>';  
        }
    }

    public function enviarEmailConfirmado(){
        echo '<br/>... envia email de confirmação ...<br/>'; 
    }

}
    