<?php

namespace src\dao;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interface\ICadastro;

class ContratoModel extends BD implements ICadastro {
  public function salvar(){
    //lógica 
  }

  public function registrarLog(Log $log){
    //lógica
  }

  public function enviarNotificacao(Notificacao $notificacao){
    //lógica
  }
}