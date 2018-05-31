<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
    create_admin_account();

function already_registered()
{
    $array = file_get_contents('private/users');
    $unserialized_array = unserialize($array);
    foreach ($unserialized_array as $element)
    {
        if ($element['login'] === $_POST['login'])
            return TRUE;
    }
    return FALSE;
}

function add_user($hashed_pw)
{
    $array = file_get_contents('private/users');
    $unserialized_array = unserialize($array);
    $unserialized_array[] = array('login' => $_POST['login'], 'passwd' => $hashed_pw);
    $serialized_array = serialize($unserialized_array);
    file_put_contents('private/users', $serialized_array);
    echo "Your account is now created, you can log in with", PHP_EOL;
}

if ($_POST['submit'] === 'OK' && $_POST['login'] != NULL && $_POST['passwd1'] != NULL && $_POST['passwd2'] != NULL)
{
    $hashed_pw = hash('whirlpool', $_POST['passwd1']);
    $hashed_pw_confirm = hash('whirlpool', $_POST['passwd2']);

    if ($hashed_pw != $hashed_pw_confirm)
        echo "Confirmation de mot de passe echoué", PHP_EOL;
    else
    {
        if (!(file_exists('/private')))
        {
            mkdir('private/', 0777, true);
            $array = array(array('login' => $_POST['login'], 'passwd' => $hashed_pw));
            $serialized_array = serialize($array);
            file_put_contents('private/users', $serialized_array);
            echo "file initialized", PHP_EOL;
        }
        else
        {
            if (already_registered() == TRUE)
                echo "Cette idantifiant est déjà utilisé, veuillez en choisir un autre", PHP_EOL;
            else
                add_user($hashed_pw);
        }
    }
}
else
    echo "ERROR\n";
?>
