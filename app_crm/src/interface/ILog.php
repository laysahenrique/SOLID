<?php 

namespace src\interface;

use src\componentes\Log;
use src\componentes\Notificacao;

interface ILog{
  public function registrarLog(Log $log);
}