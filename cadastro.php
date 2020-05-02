<?php

$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING);
$marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_STRING);

echo "Produto: $produto <br>";
echo "Marca: $marca <br>";
echo "Preço: $preco <br>";
?>