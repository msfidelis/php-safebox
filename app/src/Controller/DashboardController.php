<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\Components\Transacoes\Render;
/**
 *
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    12/05/2016
 */
class dashboardController extends AppController{
 
  public function index() {
    $user_id = $this->Auth->user('id');
    $transacoes = new Render();
    $transacoes_pendentes_cli = $transacoes->renderTransacoesPendentes($user_id);
    
    if ($this->Auth->user('tipo') === 1) {
      $transacoes_pendentes_med = $transacoes->renderTransacoesPendentesMediador($user_id);
      var_dump($transacoes_pendentes_med);
    } else {
      
    }
    var_dump($transacoes_pendentes_cli); die();
  }
}
