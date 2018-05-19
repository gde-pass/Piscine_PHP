#!/usr/bin/php
<?php
function ft_is_sort($array)
{
  $tmp = $array;
  sort($tmp);
  return($tmp == $array);
}
// $tab = array("!/@#;^", "42", "Hello World", "salut", "zZzZzZz");
// if (ft_is_sort($tab))
//     echo "Le tableau est trie\n";
// else
//     echo "Le tableau n'est pas trie\n";
?>
