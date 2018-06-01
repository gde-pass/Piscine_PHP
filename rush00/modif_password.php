<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
    create_admin_account();

function modif_account($hashed_oldpw, $hashed_newpw)
{
    $i = 0;
    $array = file_get_contents('private/users');
    $unserialized_array = unserialize($array);
    foreach ($unserialized_array as $account)
    {
        if ($_SESSION['login'] === $account['login'] AND $hashed_oldpw === $account['passwd'])
        {
            $unserialized_array[$i]['passwd'] = $hashed_newpw;
            $serialized_array = serialize($unserialized_array);
            file_put_contents('private/users', $serialized_array);
            return TRUE;
        }
        $i++;
    }
    return FALSE;
}

if ($_POST['submit'] === 'OK' && $_SESSION['login'] != NULL && $_POST['newpw'] != NULL && $_POST['oldpw'] != NULL)
{
    $hashed_oldpw = hash('whirlpool', $_POST['oldpw']);
    $hashed_newpw = hash('whirlpool', $_POST['newpw']);
    if (modif_account($hashed_oldpw, $hashed_newpw) == TRUE)
        header('Location: disconnexion.php');
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>