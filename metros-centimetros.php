<?php

$numero = null;

echo "Me fale a medida em metros para eu converter em centimetros: ";
$numero = readline();

$centimetros = $numero * 100;

echo "o número $numero em centimetros fica: $centimetros \n";

// Outra maneira que poderíamos fazer também seria essa:

function converterMetrosParaCentimetros($metros) {
    return $metros * 100;
}

$metros = null;
$metros = readline();
// valor em metros
$centimetros = converterMetrosParaCentimetros($metros);

echo "$metros metros é igual a $centimetros centímetros.";
?>