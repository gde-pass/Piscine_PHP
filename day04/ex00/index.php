<?php
session_start();
if ($_GET['submit'] === 'OK' && $_GET['login'] != NULL && $_GET['passwd'] != NULL)
{
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
}
?>
<html><body>
<form method="get" action="index.php">
    Identifiant : <input type="text" name="login" value="<?php echo $_SESSION['login'];?>" autofocus required />
    <br />
    Mot de passe : <input type="password" name="passwd" value="<?php echo $_SESSION['passwd'];?>" required />
    <input type="submit" name="submit" value="OK" />
</form>
</body></html>
