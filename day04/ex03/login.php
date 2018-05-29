<?php
session_start();

include 'auth.php';

if ($_GET['login'] != NULL AND $_GET['passwd'] != NULL AND auth($_GET['login'], $_GET['passwd']) == TRUE)
{
    $_SESSION['loggued_on_user'] = $_GET['login'];
    echo "OK\n";
}
else
{
    $_SESSION['loggued_on_user'] = "";
    echo "ERROR\n";
}
?>
