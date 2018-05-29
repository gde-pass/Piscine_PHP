<?php
session_start();
include 'install.php';
$_SESSION['connexion_status'] = 'disconnected';
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
    <nav>
        <ul>

            <li class="menu-accueil">
                <a href="index.php">Home</a>
            </li>

            <li class="menu-shop">
                <a href="#">Shop</a>
                <ul class="submenu">
                    <li> <a href="#">All products</a></li>
                    <li> <a href="#">Computers</a></li>
                    <li> <a href="#">Mobile Phones</a></li>
                    <li> <a href="#">Tablets</a></li>
                    <li> <a href="#">Péripherals</a></li>
                    <li> <a href="#">Accessorises</a></li>
                </ul>
            </li>

            <li class="menu-log_unlog">
                <?php
                    if ($_SESSION['connexion_status'] == 'disconnected')
                        echo '<a href="connexion.php">Log In</a>';
                    else
                        echo '<a href="disconnexion.php">Log Out</a>';
                 ?>
            </li>

            <li class="menu-inscription">
                <?php
                    if ($_SESSION['connexion_status'] == 'disconnected')
                        echo '<a href="inscription.php"> Sign In</a>';
                ?>
            </li>

        </ul>
    </nav>
</body>
</html>
