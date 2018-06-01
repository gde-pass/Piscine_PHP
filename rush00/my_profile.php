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
    <nav>

        <ul>
<img id="header_logo" src="ressources/img/logo.png" alt="logo" />
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

            <li class="menu-log_unlog" style="float:right;">
                <?php
                    if ($_SESSION['connexion_status'] == 'disconnected')
                        echo '<a href="connexion.php">Log In</a>';
                    else
                        echo '<a href="disconnexion.php">Log Out</a>';
                 ?>
            </li>

            <?php
                if ($_SESSION['connexion_status'] == 'connected')
                {
                    echo '<li class="menu-user_profile" style="float:right;">
                    <a href="#">My Profile</a>
                    <ul class="submenu">
                        <li> <a href="#">My shopping car</a></li>
                        <li> <a href="my_profile.php">My account</a></li>
                        <li> <a href="#">History of purchase</a></li>
                    </ul></li>';
                }
            ?>

            <li class="menu-inscription" style="float:right;">
                <?php
                    if ($_SESSION['connexion_status'] == 'disconnected')
                        echo '<a href="inscription.php">Sign In</a>';
                ?>
            </li>
        </ul>
    </nav>
        <?PHP
        echo 'Bonjour ' . $_SESSION['login'];
        ?>
        <br />

        <form method="post" action="modif_password.php">
            <p> Change your password </p>
            Old password : <input type="password" name="oldpw" autofocus required />
            <br />
            New Password : <input type="password" name="newpw" required />
            <input type="submit" name="submit" value="OK" />
        </form>
        <?php
            if ($_SESSION['login'] == 'admin')
                echo '<a href="admin_only.php">Manage website</a>';
        ?>
</body>
</html>
