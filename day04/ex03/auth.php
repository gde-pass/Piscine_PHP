<?php
function auth($login, $passwd)
{
    $passwd = hash('whirlpool', $passwd);
    $array = file_get_contents('../htdocs/private/passwd');
    $array = unserialize($array);
    foreach ($array as $account)
    {
        if ($login === $account['login'] AND $passwd === $account['passwd'])
            return TRUE;
    }
    return FALSE;
}
?>
