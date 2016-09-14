<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    16/05/2016
 */
class TransacoesController extends AppController {

  var $statCriacaoDefaul = 1;
  var $msgSucess = "Registro salvo com sucesso!";
  var $msgError = "Erro ao salvar o registro";

  public function index() {
    $transacoes = $this->paginate($this->Transacoes);

    $this->set(compact('transacoes'));
    $this->set('_serialize', ['transacoes']);
  }

  public function view($id = null) {
    $transaco = $this->Transacoes->get($id, [
      'contain' => []
    ]);

    $this->set('transaco', $transaco);
    $this->set('_serialize', ['transaco']);
  }

  public function add() {
    $transaco = $this->Transacoes->newEntity();
    if ($this->request->is('post')) {
      $transaco = $this->Transacoes->patchEntity($transaco, $this->request->data);
      if ($this->Transacoes->save($transaco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('transaco'));
    $this->set('_serialize', ['transaco']);
  }

  public function edit($id = null) {
    $transaco = $this->Transacoes->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $transaco = $this->Transacoes->patchEntity($transaco, $this->request->data);
      if ($this->Transacoes->save($transaco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $this->set(compact('transaco'));
    $this->set('_serialize', ['transaco']);
  }

  public function delete($id = null) {
    $this->request->allowMethod(['post', 'delete']);
    $transaco = $this->Transacoes->get($id);
    if ($this->Transacoes->delete($transaco)) {
      $this->Flash->success(__('The transaco has been deleted.'));
    } else {
      $this->Flash->error(__('The transaco could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
