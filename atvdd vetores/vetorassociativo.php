<?php

$produto = array(
    "nome" => "Notebook",
    "preco" => 2500.00,
    "estoque" => 15
);

echo "Dados do Produto:<br>";
foreach ($produto as $chave => $valor) {
    echo ucfirst($chave) . ": " . $valor . "<br>";
}
?>