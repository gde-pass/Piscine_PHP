<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
	create_admin_account();
include "header.php";
?>
	<div class=contentform>
			<form class="formbg" action="create_user.php" method="post">
			<h1>Sign-In</h1>
			<p>
				<input class=forminput placeholder="Login" type="text" name="login" autofocus required />
				<br>
				<input class=forminput placeholder="Password" type="password" name="passwd1" required />
				<br>
				<input class=forminput placeholder="Repeat Password" type="password" name="passwd2" required />
				<br>
				<input class=buttoninput type="submit" name="submit" value="OK" />
			</p>
		</form>
	</div>

<?php
include "footer.php";
?>