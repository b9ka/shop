<?php
require_once "../install.php";
require_once "../sql.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>basket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.container-product{
			display: inline-block;
			margin-top: 40px;
			width: 100%;
		}
		.item-product{
			margin: 5px;
			position: relative;
			border-radius: 5px;
			border: 1px solid silver;
			padding: 20px;
			width: 27%;
			display: inline-block;
			text-align: center;
		}
		.img-cont{
			width: 100%;
		}
		.img-cont>img{
			max-width: 100%;
			height: 100px;
		}
		.btn-reg{
			padding: 50px;
			margin-left: 33%;
			width: 33%;
		}
		.but{
			padding: 30px;
			background: green;
			border-radius: 50% ;
		}
	</style>
</head>
<body>
<a href="../category.php">HOME</a>
<?php
$res = mysqli_query($link, SQL_SELECT_PRODUCTS);
$n = count($_SESSION['basket']['id']);
//echo "n = $n";
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";
$sum  = 0;
while ($row = mysqli_fetch_assoc($res)) {
	$i = 0;
	echo '<div class="container-product">';
	while ($i < $n) {
		if ($_SESSION['basket']['id'][$i] === $row['id']) {
				echo '<div class="item-product">';
					echo '<div class="img-cont">';
						echo '<img src="'.$row[img].'">';
						echo '<p>'.$row[cost].'</p>';
					echo '</div>';
				echo '</div>';
			$sum += $row[cost];
		}
		$i++;
	}
	echo '</div>';
}
//print_r($_SESSION['basket']['id']);
//echo "</pre>";
?>
<div class="btn-reg">
	<p><?php echo "Сума: $sum"; ?></p>
	<form action="pay.html">
		<button class="but" type="submit" value="PAY">PAY</button>
	</form>
</div>
</body>
</html>