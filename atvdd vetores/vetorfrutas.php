<?php
$frutas = array("Maçã", "Banana", "Laranja", "Uva", "Pera");

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$frutas[] = "Manga";

echo "<br>Frutas:<br>";
foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}
?>