<? 
	$connection = mysqli_connect("localhost", "root", "", "3D_magazin");
	if (!$connection) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}
	
?>
<!doctype html>
<html>
<head></head>
<body>
	<table border="1">
	<? while($product = mysqli_fetch_assoc($result)){?>
	<tr>
		<td><?= $product['denum_product']?></td>
		<td><?= $product['pret']?></td>
		<td><?= $product['categ_denum']?></td>
	</tr>
	<? }?>
</table>
</body>
</html>