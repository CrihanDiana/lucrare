<?
$result = mysqli_query($connection, "SELECT * FROM categorie WHERE id = {$_GET['id']}");
$product = mysqli_fetch_assoc($result);

if(!empty($_POST['name'])) {


	$result = mysqli_query($connection, "SELECT * FROM product");

	if(mysqli_query($connection, "UPDATE product SET denum_product = '{$_POST['denum_product']}', price = {$_POST['price']} WHERE id = {$_GET['id']}")) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Denumire <input type="text" name="name" value="<?= $product['denum_product']?>">
	<br>
	Pret <input type="text" name="name" value="<?= $product['pret']?>">

	<br>
	Categorie <select name="categ_denum">
		<? while($categorie = mysqli_fetch_assoc($result)){?>
			<option value="<?= $categorie['categ_denum']?>">
				<?= $categorie['categ_denum']?>
			</option>
		<?}?>
	</select>
	<br>
	<input type="submit">
</form>

<?}?>
