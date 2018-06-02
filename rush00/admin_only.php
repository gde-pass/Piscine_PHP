<?php
include "header.php";
if ($_SESSION['login'] == '' OR $_SESSION['connexion_status'] != 'connected' OR $_SESSION['admin'] == 'no')
{
    header('HTTP/1.0 401 Unauthorized');
    header('Location: index.php');
}
?>
<div class=contentform>
    <form class="formbg" action="create_article.php" method="post">
    <p>
        <h1>Create article</h1>
        <input class=forminput placeholder="Title" type="text" name="title" autofocus required />
        <br>
        <input class=forminput placeholder="URL Image" type="url" name="img" required />
        <br>
        <input class=forminput placeholder="Price" type="number" name="price" step="0.01" required />
        <br>
        <input class=forminput placeholder="Description" type="text" name="description" required />
        <br>
        <fieldset>
            <legend>Please select article's category</legend>

                <!-- INSERER GENERATEUR BOUTON SELON NB CATEGORY -->
        </fieldset>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<div class=contentform>
    <form class="formbg" action="modify_article.php" method="post">
    <p>
        <h1>Modify article(a faire)</h1>
        <strong>if you let a empty line the old value will stay</strong>
        <br>
        <input class=forminput placeholder="Old Title" type="text" name="old_title" autofocus required />
        <br>
        <input class=forminput placeholder="New Title" type="text" name="new_title" />
        <br>
        <input class=forminput placeholder="URL Image" type="url" name="img"  />
        <br>
        <input class=forminput placeholder="Price" type="number" name="price" step="0.01"  />
        <br>
        <input class=forminput placeholder="Description" type="text" name="description" />
        <br>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<div class=contentform>
    <form class="formbg" action="delete_article.php" method="post">
    <p>
        <h1>Delete article (a faire)</h1>
        <input class=forminput placeholder="Title" type="text" name="title" autofocus required />
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
