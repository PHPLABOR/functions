<?php
/* Copyright 2024 Thomas Trautner - PHPLABOR (www.phplabor.de) under MIT License */
/**
 * Encryption and decryption of data with a 256-bit key in cipher block chaining mode
 * Requires two key variables: $crypt0r_config['key1'] & $crypt0r_config['key2']
 * @param $data string Data to en-/decrypt
 * @param $mode 0 = encrypt | 1 = decrpyt
 * @return string en-/decrypted data
 */
function crypt0r($data, $mode=0)
{
    global $crypt0r_config;
    switch ($mode) {
        case '0':
            return openssl_encrypt($data,"AES-256-CBC",$crypt0r_config['key1'],0,$crypt0r_config['key2']);
        case '1':
            return openssl_decrypt($data,"AES-256-CBC",$crypt0r_config['key1'],0,$crypt0r_config['key2']);
        default:
            throw new InvalidArgumentException("Invalid mode: $mode. Use '0' for encryption or '1' for decryption.");
    }
}