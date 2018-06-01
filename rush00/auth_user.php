<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
    create_admin_account();

function auth($login, $passwd)
{
    $passwd = hash('whirlpool', $passwd);
    $array = file_get_contents('private/users');
    $array = unserialize($array);
    foreach ($array as $account)
    {
        if ($login === $account['login'] AND $passwd === $account['passwd'])
            return TRUE;
    }
    return FALSE;
}

if (auth($_POST['login'], $_POST['passwd']) == TRUE)
{
    $_SESSION['connexion_status'] = 'connected';
    $_SESSION['login'] = $_POST['login'];
    header('Location: index.php');
}
else
{
    echo '<html><head>
            <meta charset="utf-8">
            <title>Mini Shop</title>
        </head><body>
            <p>Password or Login doesn\'t match ! For retry please follow the link: <a href="connexion.php">Sign In</a></p>
        </body></html>';
}
?>
