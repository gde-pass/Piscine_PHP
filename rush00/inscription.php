<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
    create_admin_account();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mini Shop</title>
    <link rel="stylesheet" href="style.css" media="all" />
</head>
<body>




</body>
</html>
