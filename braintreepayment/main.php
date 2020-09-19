<?php 
require_once ("braintree_init.php");
require_once 'lib/Braintree.php';

if(file_exists(__DIR__ . "/../.env")) {
    $dotenv = new Dotenv\Dotenv(__DIR__ . "/../");
    $dotenv->load();
}

echo($clientToken = $gateway->clientToken()->generate());
?>