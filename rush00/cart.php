<?php
include 'header.php';
include 'iseven.php'
?>

<div class=cartcontent>
	<div class=cart>
		<div class=title>
			<h1>Shopping Cart</h1>
		</div>
		<div class=lines>
			<?php
				if(isset($_SESSION['cart']) && $_SESSION['cart'])
				{
					$i = 1;
					foreach($_SESSION['cart'] as $elem => $value)
					{
						if (ftiseven($i))
						{
							echo('<div class=line>
								<div class=name>
									<a>'.$elem.'</a>
								</div>
								<div  class=space1></div>
								<div class=quantity>
									<a> Quantity : '.$value.'</a>
								</div>
								<div class=buttons>
									<input class=cartbutton type="submit" name="submit" value="-"/>
									<input class=cartbutton type="submit" name="submit" value="+"/>
								</div>
								<div  class=sapce></div>
								<div class=price>
									<a> Price : '.$articles[$name][$price].'</a>
								</div>
							</div>');
						}
						$i++;
					}
				}
			?>
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
