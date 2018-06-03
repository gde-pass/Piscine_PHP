<?php
include "header.php";
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected' OR $_SESSION['admin'] == 'no')
{
    header('HTTP/1.0 401 Unauthorized');
    header('Location: index.php');
}
?>


<div class=contentform>
    <form class="formbg" action="create_category.php" method="post">
    <p>
        <h1>Create category</h1>
        <input class=forminput placeholder="Title" type="text" name="category" autofocus required />
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<div class=contentform>
    <form class="formbg" action="delete_article.php" method="post">
    <p>
        <h1>Delete article</h1>
        <input class=forminput placeholder="Title" type="text" name="title" autofocus required />
        <br>
        <input class=forminput placeholder="Your login" type="text" name="admin_login" required />
        <br>
        <input class=forminput placeholder="Your password" type="password" name="password" required />
        <br>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<div class=contentform>
    <form class="formbg" action="upgrade_user.php" method="post">
    <p>
        <h1>Upgrade a user</h1>
        <input class=forminput placeholder="User login" type="text" name="user_login" autofocus required />
        <br>
        <input class=forminput placeholder="Your login" type="text" name="admin_login" required />
        <br>
        <input class=forminput placeholder="Your password" type="password" name="password" required />
        <br>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<div class=contentform>
    <form class="formbg" action="delete_user.php" method="post">
    <p>
        <h1>Delete a user</h1>
        <input class=forminput placeholder="User login" type="text" name="user_login" autofocus required />
        <br>
        <input class=forminput placeholder="Your login" type="text" name="admin_login" required />
        <br>
        <input class=forminput placeholder="Your password" type="password" name="password" required />
        <br>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>
<?php
include "footer.php";
?>
