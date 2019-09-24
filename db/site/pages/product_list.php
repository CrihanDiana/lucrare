<?
if(isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] === 'delete'){
    if(mysqli_query($connection, "DELETE FROM producs WHERE id = {$_GET['id']}" )) {
        echo 'Succes';
    } else {
        echo 'Eroare';
    }
}

$result = mysqli_query($connection, "SELECT denum_produs, pret, categ_denum FROM produse inner join categorie on produse.id_categ = categorie.id_categ");
?>
<table border="1">
<? while($product = mysqli_fetch_assoc($result)){?>
<tr>
	<td><?= $product['denum_produs']?></td>
    <td><?= $product['pret']?></td>
    <td><?= $product['categ_denum']?></td>
	<td>
    <a href="?page=product_list&action=delete&id=<?= $product['id']?>" onclick="return confirm('Doriti sa stergeti inregistrarea?')">x</a>
    <a href="?page=students_edit&id=<?= $product['id']?>">m</a>
  </td>
</tr>
<? }?>
