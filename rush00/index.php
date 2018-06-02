<?php
include 'header.php';
$articles = file_get_contents('private/articles');
$articles = unserialize($articles);
?>
<div class=content>
	<div class=featctnt>
		##featured content##
	</div>
	<div class=latestarticles>
		<h2>Latest Articles</h2>

<?PHP
foreach ($articles as $key => $value)
{
echo "<div class=articles>
		<div class=article>
			<div class=artpic>
				<a href=#><img src=\"". $value['img'] ."\" alt=\"". $value['title'] ."\"></a>
			</div>
			<div class=arttitle>
				<h2>". $value['title'] ."</h2>
			</div>
			<div class=downinfos>
				<div class=shortdes>
                    <a>". $value['description'] ."</a>
				</div>
				<div class=price>
					<a>". $value['price'] ."€</a>
				</div>
			</div>
		</div>
	</div>";
}
?>
	</div>
</div>
<?php
include 'footer.php';
?>
