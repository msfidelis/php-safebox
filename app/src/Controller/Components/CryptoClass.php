<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller\Components;
use Cake\Crypto\Crypto;
use Cake\Utility\Security;

/**
 * @author  Matheus Scarpato Fidelis
 * @email   msfidelis01@gmail.com
 * @date    12/09/2016
 */
class CryptoClass extends Crypto {

    public function generateHash($text) {
        return $this->crypherPlainText($text);
    }

    private function crypherPlainText($plain) {
        $key = Security::salt();
        return Security::hash($plain, 'sha256', $key);
    }

}
