<?php
session_start();
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected')
{
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm=\'\'Admin area\'\'');
}




?>
