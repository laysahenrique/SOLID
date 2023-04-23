<?php 

namespace src\interface;

use src\componentes\Notificacao;

interface INotificaco{
  public function enviarNotificacao(Notificacao $notificacao);
}