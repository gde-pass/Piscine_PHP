<?php
include 'header.php';
?>

<div class=cartcontent>
	<div class=cart>
		<div class=title>
			<h1>Shopping Cart</h1>
		</div>
		<div class=lines>
			<div class=line>
				<div class=name>
					<a>$nomproduit</a>
				</div>
				<div  class=space1></div>
				<div class=quantity>
					<a> Quantity : $quantity</a>
				</div>
				<div class=buttons>
					<input class=cartbutton type="submit" name="submit" value="-"/>
					<input class=cartbutton type="submit" name="submit" value="+"/>
				</div>
				<div  class=sapce></div>
				<div class=price>
					<a> Price : $price</a>
				</div>
			</div>
		</div>
		<div class=bottom>
			<div class=totalprice>
				<a>Total price :  </a> <h2>$_price €</h2>
			</div>
			<div class=orderbutton>
				<input class=buttoninput type="submit" name="submit" value="Acheter"/>
			</div>
			</div>
		</div>
	</div>
</div>
<?php
include 'footer.php';
?>
