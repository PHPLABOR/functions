<?php
require_once('crypt0r.php');
$crypt0r_config['key1'] = "IamthefirstKey#1 - Please change me";
$crypt0r_config['key2'] = 'IamthesecondKey#2  - Please change me';

$string = "I am the string that is about to be encrypted";
echo "String: " . $string . "<hr>";
$encrypted = crypt0r($string,0);
echo "Encrypted: " . $encrypted . "<hr>";
$decrypted = crypt0r($encrypted,1);
echo "Decrypted: " . $decrypted;

