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
    <title>Inscription</title>
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

            <li class="menu-inscription" style="float:right;">
                <?php
                    if ($_SESSION['connexion_status'] == 'disconnected')
                        echo '<a href="inscription.php"> Sign In</a>';
                ?>
            </li>

        </ul>
    </nav>

    <form class="inscription_form" action="create_user.php" method="post">
    <p>
        Identifiant : <input type="text" name="login" autofocus required />
        <br />
        Mot de passe : <input type="password" name="passwd1" required />
        <br />
        Confirmer mot de passe : <input type="password" name="passwd2" required />
        <input type="submit" name="submit" value="OK" />
    </p>
    </form>
</body>
</html>
