<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Controller\Components\Usuarios\usuariosRenderClass;
use App\Controller\Components\Transacoes\Validacoes;
use App\Controller\Components\Transacoes\Transacao;

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
      $data = Validacoes::trataPost($this->request->data);
      $transaco = $this->Transacoes->patchEntity($transaco, $data);
      if ($this->Transacoes->save($transaco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $usuarios = new usuariosRenderClass();
    $this->set('clientes', $usuarios->getClientesCombo());
    $this->set('mediadores', $usuarios->getMediadoresCombo());
    $this->set(compact('transaco'));
    $this->set('_serialize', ['transaco']);
  }

  public function edit($id = null) {
    $transaco = $this->Transacoes->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $data = Validacoes::trataPost($this->request->data, $id);
      $transaco = $this->Transacoes->patchEntity($transaco, $data);
      if ($this->Transacoes->save($transaco)) {
        $this->setAlert('success', $this->msgSucess);
        return $this->redirect(['action' => 'index']);
      } else {
        $this->setAlert('danger', $this->msgError);
      }
    }
    $usuarios = new usuariosRenderClass();
    $this->set('clientes', $usuarios->getClientesCombo());
    $this->set('mediadores', $usuarios->getMediadoresCombo());
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

  public function form() {
    
  }

  /**
   * Renderiza a tela de transação
   */
  public function authtransacaocliente() {
    if ($this->request->is('post')) {
      $data = Validacoes::trataTransacao($this->request->data);
      if ($this->Transacoes->validateTransaction($data['id_transacao'], $data['transacao_pass'], $this->Auth->user('id'))) {
        return $this->redirect(['action' => 'form', 'id_transacao' => $data['id_transacao']]);
      }
    }
    $this->viewBuilder()->layout('login');
    if ($this->Auth->user('tipo') === 2) {
      $lastTransaction = $this->Transacoes->getLastTransaction($this->Auth->user('id'));
      if ($lastTransaction) {
        $this->set('data', $lastTransaction->toArray());
      } else {
        $this->Auth->logout();
      }
    } else {
      $this->Auth->logout();
    }
  }

  /**
   * Reseta a chave da transação informada pelo ID
   */
  public function resetkey() {
    $this->autoRender = false;
    $id = $this->request->data['id'] ? (int) $this->request->data['id'] : NULL;
    if (!is_null($id)) {

      try {
        $transacao = $this->Transacoes->get($id, [
          'contain' => []
        ]);
        
        $data = array(
          'id_transacao' => $id, 
          'transacao_pass' => Validacoes::newTransacaoPass()
        );
        
        $transacao = $this->Transacoes->patchEntity($transacao, $data);
        
        if ($this->Transacoes->save($transacao)) {
          echo json_encode(['return' => 'true']);
        } else {
          echo json_encode(['return' => 'false']);
        }
        
      } catch (Exception $ex) {
        echo json_encode(['return' => $ex]);
      }
    } else {
      $this->Auth->logout();
    }
  }

}
