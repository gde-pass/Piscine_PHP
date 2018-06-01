<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mini Shop</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" href="style.css" media="all" />
</head>

<body>
	<header>
	<nav>

		<ul>
			<li>
				<img id="header_logo" src="ressources/img/minishop.svg" alt="logo" />
			</li>
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
					<a href="my_profile.php">'.$_SESSION['login'].'</a>
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
						echo '<a href="inscription.php"> Sign In</a>';
				?>
			</li>
        </ul>
    </nav>

		</ul>
	</nav>
</header>