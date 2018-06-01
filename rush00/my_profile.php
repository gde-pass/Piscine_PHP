<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
    create_admin_account();
include "header.php";
?>
        <div class=contentform>
        <form class=formbg method="post" action="modif_password.php">
            <?PHP echo '<h2>Hello '.$_SESSION['login']." !</h2>";?>
            <h1>Change your password</h1>
            <input class=forminput placeholder="Old Password" type="password" name="oldpw" autofocus required />
            <br>
            <input class=forminput placeholder="New Password" type="password" name="newpw" required />
            <br>
            <input class=buttoninput type="submit" name="submit" value="OK" />
        </form>
        <?php
            if ($_SESSION['login'] == 'admin')
                echo '<a href="admin_only.php">Manage website</a>';
        ?>
        </div>

<?php
include "footer.php";
?>