<?php
include "header.php";
?>
<div class=contentform>
    <form class="formbg" action="admin_only.php" method="post">
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
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>
<div class=contentform>
    <form class="formbg" action="admin_only.php" method="post">
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
<?php
include "footer.php";
?>