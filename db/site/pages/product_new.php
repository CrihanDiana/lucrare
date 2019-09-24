<?
$result = mysqli_query($connection, "SELECT * FROM categorie WHERE id = {$_GET['id_categ']}");
$product = mysqli_fetch_assoc($result);

	if(!empty($_POST['denum_produs'])) {

		$result = mysqli_query($connection, "SELECT * FROM categorie");

	$query1 = (mysqli_query($connection,"INSERT INTO produse SET  denum_produs= '{$_POST['denum_produs']}', pret = {$_POST['pret']}"));
	$query2 = (mysqli_query($connection,"INSERT INTO categorie SET  categ_denum = {$_POST['categ_denum']}"));

	if($query1 and $query2) {
		echo 'Succes';
	} else {
		echo 'Eroare';
	}
} else {
?>
<form action="" method="post">
	Denumire <input type="text" name="denum_produs">
	<br>
	Pret <input type="text" name="pret">
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