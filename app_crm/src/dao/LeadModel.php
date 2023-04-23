<?php

namespace src\dao;

use src\BD;
use src\componentes\Notificacao;
use src\interface\ICadastro;
use src\interface\ILog;
use src\interface\INotificaco;

class LeadModel extends BD implements ICadastro, INotificaco{
  public function salvar(){
    
  }

  public function enviarNotificacao(Notificacao $notificacao){
    
  }
}