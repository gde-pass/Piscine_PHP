<?php
include 'header.php';
?>

<div class=cartcontent>
	<div class=cart>
		<h1>Shopping Cart</h1>
		<div class=line>
			<div class=name>
				<a>$nomproduit</a>
			</div>
			<div class=quantity>
			<a> Quantity : $quantity</a>
			</div>
			<div class=price>
				<a> Price : $price</a>
			</div>
			<input class=cartbutton type="submit" name="submit" value="add 1" />
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
