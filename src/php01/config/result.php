<?php
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
$product = htmlspecialchars($_GET["product"], ENT_QUOTES);
$order_quantity = htmlspecialchars($_GET["order_quantity"], ENT_QUOTES);

echo "私の名前は、" . $name . "<br>";
echo "ご希望の商品は、" . $product. "<br>";
echo "注文数は、" . $order_quantity. "<br>";