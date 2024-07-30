<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cryptorgram {
	/* Security Cryptography */
    private $encKey;
    private $aesKey;
    private $cipher;
    private $sizeCode;

	public function __construct() {
        $this->CI =& get_instance(); // duplikasi objek CI
        $this->encKey = $this->CI->config->item('encryption_key');
        $this->aesKey = $this->CI->config->item('sys_private_key');
        $this->cipher = mcrypt_module_open(MCRYPT_RIJNDAEL_256, '', MCRYPT_MODE_CBC, '');
        $this->sizeCode = mcrypt_enc_get_iv_size($this->cipher);
    }

    public function encrypt($plain, $isCustom = true) { // encryption
        $code = '';

        if ($isCustom) {
            if (mcrypt_generic_init($this->cipher, $this->encKey, $this->aesKey) != -1) {
                $encrypted = mcrypt_generic($this->cipher, $plain);
                mcrypt_generic_deinit($this->cipher);
            }

            $code = bin2hex($encrypted);
        } else {
            $this->CI->load->library('encrypt');
            $this->encKey = $this->CI->config->item('encryption_key') . $this->aesKey;
            $code = $this->CI->encrypt->encode($plain, $this->encKey);
        }

        return $code;
    }

    public function decrypt($encrypted, $isCustom = true) { // decryption
        $text = '';

        if ($isCustom) {
            if (mcrypt_generic_init($this->cipher, $this->encKey, $this->aesKey) != -1) {
                $decrypted = mdecrypt_generic($this->cipher, self::_hexToBin($encrypted));
                mcrypt_generic_deinit($this->cipher);
            }

            $text = trim($decrypted);
        } else {
            $this->CI->load->library('encrypt');
            $this->encKey = $this->CI->config->item('encryption_key') . $this->aesKey;
            $text = $this->CI->encrypt->decode($encrypted, $this->encKey);
        }

        return $text;
    }

    private function _hexToBin($hexstr) { // converter
        $textSize = strlen($hexstr);
        $textBinner = "";
        $i = 0;

        while($i < $textSize) {
            $subs = substr($hexstr, $i, 2);
            $packs = pack("H*", $subs);

            if ($i == 0) {
                $textBinner = $packs;
            } else {
                $textBinner .= $packs;
            }

            $i += 2;
        }

        return $textBinner;
    }
}
