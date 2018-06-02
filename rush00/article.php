<?php
if ($_GET["article"] && isset($_GET["article"]))
{
	include ("header.php");
	foreach($articles as $elem => $value)
	{
		if ($value['title'] === $_GET["article"])
		{
			$artname = $_GET["article"];
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
		<div class=catcontent>
			<div class=latestarticles>
				<h2><?php echo($artname);?></h2>
			</div>
		<div class=articles>
			
		</div>
<?php
include 'footer.php';
?>