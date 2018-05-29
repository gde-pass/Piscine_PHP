<?php
function modif_account($hashed_oldpw, $hashed_newpw)
{
    $i = 0;
    $array = file_get_contents('../htdocs/private/passwd');
    $unserialized_array = unserialize($array);
    foreach ($unserialized_array as $account)
    {
        if ($_POST['login'] === $account['login'] AND $hashed_oldpw === $account['passwd'])
        {
            $unserialized_array[$i]['passwd'] = $hashed_newpw;
            $serialized_array = serialize($unserialized_array);
            file_put_contents('../htdocs/private/passwd', $serialized_array);
            return TRUE;
        }
        $i++;
    }
    return FALSE;
}

if ($_POST['submit'] === 'OK' && $_POST['login'] != NULL && $_POST['newpw'] != NULL && $_POST['oldpw'] != NULL)
{
    $hashed_oldpw = hash('whirlpool', $_POST['oldpw']);
    $hashed_newpw = hash('whirlpool', $_POST['newpw']);
    if (modif_account($hashed_oldpw, $hashed_newpw) == TRUE)
        echo "OK", PHP_EOL;
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>
