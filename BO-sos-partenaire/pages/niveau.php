<?php 
	if(!empty($_POST)){
		if(!empty($_POST['nouveausniveau'])){
			$nouveausniveau = $_POST['nouveausniveau'];
			$query = "INSERT INTO niveau VALUES (DEFAULT,\"". $nouveausniveau. "\")";
			$db->prepare($query);
		}
		if(isset($_POST['supprimer'])){
			$idniveau = $_POST['id'];
			$query = "DELETE FROM niveau WHERE idniveau = $idniveau";
			$db->prepare($query);
		}
		if(isset($_POST['modifier'])){
			$idniveau = $_POST['id'];
			$newNom = $_POST['nomniveau'];
			$query = "UPDATE niveau SET niveau = \"$newNom\" WHERE idniveau = $idniveau";
			$db->prepare($query);
		}
	}
?>

<table class="table ">
  <?php foreach ($db->query('SELECT * FROM niveau') as $info): ?>
      <tr>
        <form action="" method="post">
        	<td><?php echo "<input type=\"tex\" value=\"$info->niveau\" name=\"nomniveau\">"; ?></td>
        	<td><button type="submit" name="modifier">Modifier</button></td>
        	<td><button type="submit" name="supprimer">Supprimer</button></td>
          	<input type="hidden" name="id" value="<?php echo $info->idniveau ?>"/>
        </form>
      <tr>
  <?php endforeach; ?>
</table>
<form action="" method="post">
	<input type="text" placeholder="Ajouter un niveau" name="nouveausniveau">
	<button type="submit" name="ajoutniveau">Ajouter</button>
</form>

