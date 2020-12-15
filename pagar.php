<?php
$preference = new MercadoPago\Preference();
// ...
$preference->payment_methods = array(
  "excluded_payment_methods" => array(
    array("id" => "master")
  ),
  "excluded_payment_types" => array(
    array("credit_card" => "amex", "atm" => "redlink")
  ),
  "installments" => 12
);
// ...
?>