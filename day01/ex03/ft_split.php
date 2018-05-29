<?php
function ft_split($chain)
{
    $chain = preg_split("/ /", $chain, NULL, PREG_SPLIT_NO_EMPTY);
    sort($chain);
    return ($chain);
}
?>
