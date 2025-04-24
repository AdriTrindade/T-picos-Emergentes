<?php

$numeros = array(10, 20, 30, 40, 50);

unset($numeros[2]);


$numeros = array_values($numeros);
s
echo "Números restantes:<br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}
?>