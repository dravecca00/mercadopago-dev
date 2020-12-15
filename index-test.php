<?php
//validacion posts
$title = "tit";// $_POST['title'];
$price = 100; //$_POST['price'];
$unit = 1; //$_POST['unit'];
$img = "https://redengo.com/admindb/photos/file_871.jpg"; //$URL.$_POST['img'];


// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->id = 1234;
$item->title = $title;
$item->description = "Dispositivo móvil de Tienda e-commerce";
$item->item_url = $img;
$item->quantity = 1;
$item->unit_price = $price;
$preference->items = array($item);


$payer = new MercadoPago\Payer();
$payer->name = "Lalo";
$payer->surname = "Landa";
$payer->email = "test_user_63274575@testuser.com";
$payer->phone = array(
    "area_code" => "11",
    "number" => "22223333");

$payer->address = array(
    "street_name" => False,
    "street_number" => 123,
    "zip_code" => "111"
);
$preference->payer = $payer;

$preference->payment_methods = array(
    "excluded_payment_methods" => array(
      array("id" => "amex")
    ),
    "excluded_payment_types" => array(
      array("id" => "atm")
    ),
    "installments" => 6
  );

$preference->external_reference = "ravecca@gmail.com";


$preference->auto_return = "approved";
$preference->back_urls = array(
    "success" => "https://redengo.com/bots/mercadopago/success.php",
    "pending" => "https://redengo.com/bots/mercadopago/pending.php",
    "failure" => "https://redengo.com/bots/mercadopago/failure.php",
  );

$preference->notification_url = "https://redengo.com/bots/mercadopago/ipn.php";


$preference->save();

echo("<pre>");
var_dump($preference);
?>
