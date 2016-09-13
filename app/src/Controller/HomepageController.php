<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class HomepageController extends AppController {

  public function beforeFilter(Event $event) {
    $this->Auth->allow('index');
  }

  public function beforeRender(Event $event) {
    parent::beforeRender($event);
    $this->viewBuilder()->layout('material');
  }

  public function index() {
    
  }

}
