<?php 
	if(!empty($_POST)){
		if(!empty($_POST['nouveausport'])){
			$nouveausport = $_POST['nouveausport'];
			$query = "INSERT INTO sport VALUES (DEFAULT,\"". $nouveausport. "\")";
			$db->prepare($query);
		}
		if(isset($_POST['supprimer'])){
			$idsport = $_POST['id'];
			$query = "DELETE FROM sport WHERE idsport = $idsport";
			$db->prepare($query);
		}
		if(isset($_POST['modifier'])){
			$idsport = $_POST['id'];
			$newNom = $_POST['nomsport'];
			$query = "UPDATE sport SET sport = \"$newNom\" WHERE idsport = $idsport";
			$db->prepare($query);
		}
	}
?>

<table class="table ">
  <?php foreach ($db->query('SELECT * FROM sport') as $info): ?>
      <tr>
        <form action="" method="post">
        	<td><?php echo "<input type=\"tex\" value=\"$info->sport\" name=\"nomsport\">"; ?></td>
        	<td><button type="submit" name="modifier">Modifier</button></td>
        	<td><button type="submit" name="supprimer">Supprimer</button></td>
          	<input type="hidden" name="id" value="<?php echo $info->idsport ?>"/>
        </form>
      <tr>
  <?php endforeach; ?>
</table>
<form action="" method="post">
	<input type="text" placeholder="Ajouter un sport" name="nouveausport">
	<button type="submit" name="ajoutSport">Ajouter</button>
</form>

