#!/usr/bin/php
<?php
$array = $argv[1];
$array = preg_split("/ +/", trim($array));

$le = count($array);

$i = 1;
while ($i < $le)
{
    echo "$array[$i]";
    echo " ";
    $i++;
}
echo "$array[0]", PHP_EOL;
?>
