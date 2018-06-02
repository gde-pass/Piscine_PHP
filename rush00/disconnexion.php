<?php
session_start();
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected')
{
    header('HTTP/1.0 401 Unauthorized');
    header('Location: index.php');
}
else
{
    $_SESSION = array();
    $_SESSION['connexion_status'] = 'disconnected';
    header('Location: index.php');
}
?>
