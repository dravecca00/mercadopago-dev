<?php
$get_string = $_SERVER['QUERY_STRING'];
$data = json_encode($get_string);
echo '<script>';
echo 'console.log('.  $data .')';
echo '</script>';
parse_str($get_string, $a);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago exitoso</title>
</head>
<body>
    <h1>Pago exitoso!</h1>
    <table>
    <?php foreach($a as $key => $value){
        print("<tr><td>$key</td><td>$value</td></tr>");
    }
    ?>
    </table>
</body>
</html>