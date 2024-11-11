<?php
/*
Variáveis 
*/

$variavel_1 = 'texto';
// Imprimir o valor a variável e o seu tipo

echo "Variavel 1: ". $variavel_1. ", Tipo: ". gettype($variavel_1). "<br>";

$variavel_2 = 123;
// Imprimir o valor a variável e o seu tipo

echo "Variavel 2: ". $variavel_2. ", Tipo: ". gettype($variavel_2). "<br>";

$variavel_3 = 1;
// Imprimir o valor a variável e o seu tipo

echo "Variavel_3:". $varialvel_3. "Tipo: ". gettype(value: $variavel_3). "<br>";

$array = [
    "foo" => "bar",
    "bar" => "foo",
];
// Imprimir o valor a variável e o seu tipo

echo "Array: ". print_r($array, true). ", Tipo: ". gettype($array). "<br>";
?>