#!/usr/bin/php
<?php
echo "Entrez un nombre: ";

$input = trim(fgets(STDIN));

if (is_numeric($input))
{
    if ($input % 2 == 1)
    {
        echo "Le chiffre $input est Impair", PHP_EOL;
    }
    else
    {
        echo "Le chiffre $input est Pair", PHP_EOL;
    }
}
else
{
    echo "'$input' n'est pas un chiffre", PHP_EOL;
}
 ?>
