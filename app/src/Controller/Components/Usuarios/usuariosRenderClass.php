<?php

namespace App\Controller\Components\Usuarios;

use Cake\Controller\Action;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   matheus.fidelis@industriafox.com
 * @date    04/06/2016
 */
class usuariosRenderClass extends Action {

  private $where = "Users.stat = 1";

  /**
   * Renderiza os registros do combo de funções
   */
  public function renderFuncoes() {
    return array(
      1 => 'Administrador', 
      2 => 'Cliente'
    );
  }

  public function getUsuariosData($where = null) {
    if (isset($where)) {
      $this->where = $where;
    }
    return $this->getUsersWithJoins();
  }
  
  public function getUser($id) {
    return $this->getRegister($id);
  }

  /**
   * Retorna os dados dos usuários do banco de dados
   * @param type $where clausula da pesquisa
   * @return type array 
   */
  private function getUsersWithJoins() {
    $this->controller->loadModel('Users');
    return $this->controller->Users->find()->select([
          'id', 'NAME', 'email', 'PASSWORD', 'created', 'modified',
        ])->where($this->where);
  }

  private function getRegister($id) {
    $this->controller->loadModel('Users');
    return  $this->controller->Users->get($id, [
      'contain' => []
    ]);
  }
  
  /**
   * Monta o combo de clientes
   * @return type array combo
   */
  public function getClientesCombo() {
    $array = array();
    $this->controller->loadModel('Users');
    $clientes = $this->controller->Users->findClientes()->toArray();
    
    foreach ($clientes as $cliente) {
        $array[$cliente['id']] = $cliente['NAME'];
    }
    return $array;
  }
  
  /**
   * Monta o combo do mediador
   * @return type array combo
   */
  public function getMediadoresCombo() {
    $this->controller->loadModel('Users');
    $mediadores = $this->controller->Users->findMediadores()->toArray();
    foreach ($mediadores as $mediador) {
        $array[$mediador['id']] = $mediador['NAME'];
    }
    return $array;
  }

}
