<?php
$data = json_encode($_SERVER['QUERY_STRING']);
echo '<script>';
echo 'console.log('.  $data .')';
echo '</script>';
echo ("Pago pendiente");
?>