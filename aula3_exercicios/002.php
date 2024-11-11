<?php
/*
Escreva um script que imprima qual o maior número.
Use IF
*/
$a = 10;
$b = 1;

if ($a > $b) {
    echo "O maior número é $a.";
} else {
    echo "O maior número é $b.";
}

// Adicione um novo número

$c = 5;

if ($a > $b && $a > $c) {
    echo "O maior número é $a.";
} elseif ($b > $a && $b > $c) {
    echo "O maior número é $b.";
} else {
    echo "O maior número é $c.";
}

// Adicione mais um novo número

$d = 20;

if ($a > $b && $a > $c && $a > $d) {
    echo "O maior número é $a.";
} elseif ($b > $a && $b > $c && $b > $d) {
    echo "O maior número é $b.";
} elseif ($c > $a && $c > $b && $c > $d) {
    echo "O maior número é $c.";
} else {
    echo "O maior número é $d.";
}


?>