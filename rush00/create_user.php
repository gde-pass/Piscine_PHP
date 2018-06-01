<?php
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
    $unserialized_array[] = array('login' => $_POST['login'], 'passwd' => $hashed_pw, 'admin' => 'no');
    $serialized_array = serialize($unserialized_array);
    file_put_contents('private/users', $serialized_array);
    echo '<html><head>
            <meta charset="utf-8">
            <title>Mini Shop</title>
        </head><body>
            <p>Your account is now created, you can log in with <a href="connexion.php">Here</a></p>
        </body></html>';

}

if ($_POST['submit'] === 'OK' && $_POST['login'] != NULL && $_POST['passwd1'] != NULL && $_POST['passwd2'] != NULL)
{
    $hashed_pw = hash('whirlpool', $_POST['passwd1']);
    $hashed_pw_confirm = hash('whirlpool', $_POST['passwd2']);

    if ($hashed_pw != $hashed_pw_confirm)
    {
        echo '<html><head>
                <meta charset="utf-8">
                <title>Mini Shop</title>
            </head><body>
                <p>Passwords doesn\'t match ! For retry please follow the link: <a href="inscription.php">Sign In</a></p>
            </body></html>';
    }
    else
    {
        if (!(file_exists('/private')))
        {
            mkdir('private/', 0777, true);
            $array = array(array('login' => $_POST['login'], 'passwd' => $hashed_pw, 'admin' => 'no'));
            $serialized_array = serialize($array);
            file_put_contents('private/users', $serialized_array);
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
?>
