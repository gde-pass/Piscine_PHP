#!/usr/bin/php
<?php
echo "Entrez un nombre: ";

while ($input = fgets(STDIN))
{
    $input = trim($input);
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
    echo "Entrez un nombre: ";
}
 ?>
