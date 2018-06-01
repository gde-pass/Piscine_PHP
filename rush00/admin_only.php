<?php
include "header.php";
?>

<div class=contentform>
    <form class="formbg" action="auth_user.php" method="post">
    <p>
        <h1>Log-In</h1>
        <input class=forminput placeholder="Login" type="text" name="login" autofocus required />
        <br>
        <input class=forminput placeholder="Password" type="password" name="passwd" required />
        <br>
        <input class=buttoninput type="submit" name="submit" value="OK" />
    </p>
    </form>
</div>

<?php
include "footer.php";
?>
