<?php
if ($_GET["article"] && isset($_GET["article"]))
{
	include ("header.php");
	foreach($articles as $elem => $value)
	{
		if ($value['title'] === $_GET["article"])
		{
			$artname = $_GET["article"];
			$description = $value["description"];
			$price = $value["price"];
			$img = $value["img"];
		}
	}
	if(!isset($artname))
	{
		header('HTTP/1.0 404 File Not Found');
    	header('Location: index.php');
	}
}
else
{
	header('HTTP/1.0 404 File Not Found');
    header('Location: index.php');
}
?>
		<div class=artcontent>
			<div class=articlebg>
				<div class=topbox>
					<div class=artleftcol>
						<h2><?php echo($artname);?></h2>
						<div class=descr><a><?php echo($description);?></a></div>
					</div>
					<div class=artrightcol>
						<div class=articleimg><img src=<?php echo $img;?>></div>
						<div class=price><h1><?php echo($price);?> €</h1></div>
					</div>
				</div>
				<div class=botbox>
					<div class=tocart>
						<input class=buttoncart type="submit" name="submit" value="ADD TO CART" />
					</div>
				</div>
			</div>
		</div>
<?php
include 'footer.php';
?>