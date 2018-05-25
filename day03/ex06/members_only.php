<?php
if ($_SERVER['PHP_AUTH_USER'] === 'zaz' and $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys')
{
    echo "<html><body>\nBonjour Zaz<br />\n<img src='data:img/png;base64," . base64_encode(file_get_contents("../img/42.png")) . "'>\n<body></html>", PHP_EOL;
}
else
{
    header('HTTP/1.0 401 Unauthorized');
    header('WWW-Authenticate: Basic realm=\'\'Espace membres\'\'');
    echo "<html><body>Cette zone est accessible uniquement aux membres du site<body></html>", PHP_EOL;
}
?>
