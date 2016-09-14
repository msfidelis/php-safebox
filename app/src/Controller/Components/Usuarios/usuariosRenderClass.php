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

}
