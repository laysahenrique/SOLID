<?php

namespace src\dao;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interface\ICadastro;
use src\interface\ILog;
use src\interface\INotificaco;

class UsuarioModel extends BD implements ICadastro, ILog, INotificaco{
  public function salvar(){
    
  }
  
  public function registrarLog(Log $log){
    
  }

  public function enviarNotificacao(Notificacao $notificacao){
    
  }
}