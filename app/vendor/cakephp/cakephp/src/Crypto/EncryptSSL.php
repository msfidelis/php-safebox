<?php

namespace Cake\Crypto;
use Cake\Crypto\Crypto;
/**
 * Description of RSA
 * @email msfidelis01@gmail.com
 * @author Matheus Fidelis
 */
class EncryptSSL extends Crypto {

    /**
     * Gera um par de chaves com o OpenSSL
     * @return type
     */
    public function generataPair() {
        $configs = array(
            "digest_alg" => $this->digest_alg,
            "private_key_bits" => $this->private_key_bits,
            "private_key_type" => $this->private_key_type,
        );
        $res = openssl_pkey_new($configs);
        $pubKey = openssl_pkey_get_details($res)["key"];
        $privKey = '';
        openssl_pkey_export($res, $privKey);
        return array('pubkey' => $pubKey, 'privkey' => $privKey);
    }
    
    /**
     * Encrypt data 
     * @param type $plain
     * @param type $PubKey
     */
    public static function encrypt($plain, $PubKey) {
        $encrypted = null;
        openssl_public_encrypt($plain, $encrypted, $PubKey);
        return $encrypted;
    }
    
    /**
     * Decrypt data
     * @param type $enc
     * @param type $PrivKey
     */
    public static function decrypt($enc, $PrivKey) {
        $decrypted = null;
        openssl_private_decrypt($enc, $decrypted, $PrivKey);
        return $decrypted;
    }

}
