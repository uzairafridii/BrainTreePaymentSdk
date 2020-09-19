<?php
require_once ("braintree_init.php");
require_once 'lib/Braintree.php';

$nonce = $_POST['nonce'];
$amount = $_POST['amount'];
$result = $gateway->transaction()->sale([
  'amount' => $amount,
  'paymentMethodNonce' => $nonce,
  'options' => [
    'submitForSettlement' => True
  ]
]);

if ($result->success) {
   echo $result;
} else {
  echo $result;
}
?>