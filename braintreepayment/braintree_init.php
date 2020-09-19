<?php
session_start();
require_once("lib/autoload.php");

$gateway = new Braintree\Gateway([
    'environment' => 'sandbox',
    'merchantId' => 't4svrzhf2pkbqq3f',
    'publicKey' => 'ry2fx5pdvzzhg8bv',
    'privateKey' => 'fee63e42a304397f30bc71d460a478f1'
]);
?>
