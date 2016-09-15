<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Components\Transacoes;

use Cake\Controller\Action;

/**
 * Description of Render
 *
 * @author fidelis
 */
class Render extends Action {
  
  public function renderClienteStats($id_cliente) {
    return array(
      'pendentes' => $this->renderTransacoesPendentes($id_cliente)
    );
  }

  public function renderTransacoesPendentes($id_usuario) {
    $this->controller->loadModel('Transacoes');
    return $this->controller->Transacoes->getQtdItensPendentesCliente($id_usuario);
  }

  public function renderTransacoesPendentesMediador($id_mediador) {
    $this->controller->loadModel('Transacoes');
    return $this->controller->Transacoes->getQtdItensPendentesMediador($id_mediador);
  }

}
