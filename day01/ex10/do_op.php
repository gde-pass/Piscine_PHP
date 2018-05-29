#!/usr/bin/php
<?php

// Check si le nombre d'arguments est respecté puis
// Récupere tous les arguments et les places dans un tableaux en suppriment les
// espaces en trop au milleu et sur les cotés.

if ($argc != 4)
    echo "Incorrect Parameters", PHP_EOL;
else
{
    $i = 1;
    while($i < $argc)
    {
        $string .= $argv[$i];
        $string .= " ";
        $i++;
    }
    $array = preg_split("/ +/", trim($string));

// Fait l'opération en fonction de argv[1]

    switch ($array[1])
    {
        case '+':
            echo $array[0] + $array[2], PHP_EOL;
            break;
        case '-':
            echo $array[0] - $array[2], PHP_EOL;
            break;
        case '*':
            echo $array[0] * $array[2], PHP_EOL;
            break;
        case '/':
            echo $array[0] / $array[2], PHP_EOL;
            break;
        case '%':
            echo $array[0] % $array[2], PHP_EOL;
            break;
    }
}
?>
