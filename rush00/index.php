<?php
session_start();
include 'install.php';
if (!(file_exists('private/users'))) // Creation du fichier users et create admin account
	create_admin_account();
include "header.php";
?>

		<div class=content>
			<div class=featctnt>
				##featured content##
			</div>
			<div class=latestarticles>
				<h2>Latest Articles</h2>
			</div>
		<div class=articles>
			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>

			<div class=article>
				<div class=artpic>
					<a href="linktoarticlepage"><img src=uploads/bato.png alt="nomArticle"></a>
				</div>
				<div class=arttitle>
					<h2>$titre_de_l'articleooooooooooooooooooo</h2>
				</div>
				<div class=downinfos>
					<div class=shortdes>
						<a>$petitsegmentdeladescriptiondel'article</a>
					</div>
					<div class=price>
						<a>$prix</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include"footer.php";
?>
