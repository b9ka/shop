<?php
require_once "install.php";

?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	.container-product{
		margin-top: 40px;
		width: 100%;
	}

	.go-to_bsk{
		display: block;
		padding: 5px;
		background: rgba(21, 128, 26, 0.75);
		width: 20%;
		margin-left: 40%;
		text-decoration: none;
		color: white;
		text-align: center;
		font-size: 14px;
	}
	.go-to-bsk-mt{
		z-index: 100;
		display: none;
		text-align: center;
		padding: 10px;
		position: fixed;
		top: 0;
		right: 0;
		background: rgba(21, 128, 26, 0.75);
		width: 40px;
	}

	.go-to-bsk-mt>img{
		width: 20px;
		height: auto;
	}
	.item-product{
		margin: 5px;
		position: relative;
		border-radius: 5px;
		border: 1px solid silver;
		padding: 20px;
		width: 29%;
		display: inline-block;
		text-align: center;
	}
	.sale{
		padding: 5px;
		position: absolute;
		top: 10%;
		left: 0;
		height: 20px;
		background: green;
		color: white;
	}

	.item-product>p{
		font-size: 19px;
	}
	.item-product button{
		padding: 10px;
		background: green;
		border-radius: 50% ;
	}
	.img-cont{
		width: 100%;
	}
	.img-cont>img{
		height: 100px;
	}
	@media (max-width: 700px)
	{
		.go-to_bsk{
			display: none;
		}
		.go-to-bsk-mt{
			display: block;
		}
	}

</style>
<div style="position: relative">
	<a class="go-to_bsk" href="user/basket.php">GO TO BASKET</a>
	<a class="go-to-bsk-mt" href="user/basket.php"><img src="http://content.mycutegraphics.com/graphics/easter/basket-of-easter-eggs-black-white.png"></a>
</div>
<div>
	<?php
	$qery = "SELECT * FROM `products`";
	$result = mysqli_query($link, $qery);
	?>
	<div class="container-product">
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<div class="item-product">
		<div class="sale">-15%</div>
		<div class="img-cont">
			<img src="<?php echo $row['img']; ?>">
		</div>
		<p><?php echo $row['name']; ?></p>
		<p><?php echo $row['cost']; ?></p>
			<form method="post" action="user/add_basket.php">
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				<button type="submit" name="submit" value="basket">basket</button>
			</form>
		</div>
	<?php endwhile; ?>
	</div>
</div>