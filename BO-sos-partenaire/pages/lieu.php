<?php 
	if(!empty($_POST)){
		if(!empty($_POST['nouveauLieu'])){
			$nouveauLieu = $_POST['nouveauLieu'];
			$query = "INSERT INTO lieu VALUES (DEFAULT,\"". $nouveauLieu. "\")";
			$db->prepare($query);
		}
		if(isset($_POST['supprimer'])){
			$idlieu = $_POST['id'];
			$query = "DELETE FROM lieu WHERE idlieu = $idlieu";
			$db->prepare($query);
		}
		if(isset($_POST['modifier'])){
			$idlieu = $_POST['id'];
			$newNom = $_POST['nomLieu'];
			$query = "UPDATE lieu SET ville = \"$newNom\" WHERE idlieu = $idlieu";
			$db->prepare($query);
		}
	}
?>

<table class="table ">
  <?php foreach ($db->query('SELECT * FROM lieu') as $info): ?>
      <tr>
        <form action="" method="post">
        	<td><?php echo "<input type=\"tex\" value=\"$info->ville\" name=\"nomLieu\">"; ?></td>
        	<td><button type="submit" name="modifier">Modifier</button></td>
        	<td><button type="submit" name="supprimer">Supprimer</button></td>
          	<input type="hidden" name="id" value="<?php echo $info->idlieu ?>"/>
        </form>
      <tr>
  <?php endforeach; ?>
</table>
<form action="" method="post">
	<input type="text" placeholder="Ajouter un lieu" name="nouveauLieu">
	<button type="submit" name="ajoutVille">Ajouter</button>
</form>

