<!-- PHP en haut pour refresh de la page -->
<?php 
    if (!empty($_POST)){
      //Ajouter un membre (pour les tests)
      if(isset($_POST['addMember']))
      {
        $query = "INSERT INTO utilisateur VALUES (DEFAULT,'Maël', 'Mayon', 'Mawel','1234', 'mael.mayon@free.fr','0613499190')";
        $db->prepare($query);
      } 
      // Modification en Cas de changement des champs inputs
      if(isset($_POST['modifierOK']))
      {
        $id           = $_POST['id'];
        $nom          = $_POST['nom'];
        $prenom       = $_POST['prenom'];
        $identifiant  = $_POST['identifiant'];
        $email        = $_POST['email'];
        $telephone    = $_POST['telephone'];
        $query        = "UPDATE utilisateur SET nom = \"$nom\", prenom = \"$prenom\", identifiant = \"$identifiant\", email = \"$email\", telephone = \"$telephone\" WHERE idutilisateur = $id";
        $db->prepare($query);
      }
      if(isset($_POST['choix']))
      {
        $id = $_POST['id'];
        //Modifier (Marche)
        if(($_POST['choix']) == "Modifier" ){
        $query = "SELECT * FROM utilisateur WHERE idutilisateur = $id";
        foreach ($db->query($query) as $info):
          $modifForm = 
          "<form action='' method='post' name='form2' id='form2'>
          <input type='hidden' name='id' value='$info->idutilisateur'>
          <input type='text' name='nom'  value='$info->nom'><br><br>
          <input type='text' name='prenom' value='$info->prenom'><br><br>
          <input type='text' name='identifiant' value='$info->identifiant'><br><br>
          <input type='text' name='email' value='$info->email'><br><br>
          <input type='text' name='telephone' value='$info->telephone'><br><br>
          <button type='submit' name='modifierOK' >OK</button>
          </form>";
        endforeach;
        }
        //Supprimer
        if($_POST['choix'] == "Supprimer" ){
          $id = $_POST['id'];
          $query = "DELETE FROM utilisateur WHERE idutilisateur = $id";
          $db->prepare($query);
        }
      }
      
   }
?>



<br>
<form action="" method="post" >
  <button type="submit" name="addMember" >AJOUTER UN MEMBRE POUR TESTER</button>
</form>

<br><br>

<table class="table ">
  <?php foreach ($db->query('SELECT * FROM utilisateur') as $info): ?>
      <tr>
      <?php 
      echo "<td>$info->idutilisateur</td>";
      echo "<td>$info->nom</td>";
      echo "<td>$info->prenom</td>";
      echo "<td>$info->identifiant</td>";
      echo "<td>$info->mdp</td>";
      echo "<td>$info->email</td>";
      echo "<td>$info->telephone</td>";
      ?>
      <td>
        <form action="" method="post" id="form1" name="form1">
          <button type="button" name="modifier">Modifier</button>
          <button type="button" name="supprimer">Supprimer</button>
          <input type="hidden" name="id">
          <input type="hidden" name="choix">
        </form>
      </td>
      <tr>
  <?php endforeach; ?>
</table>
<!-- Affiche le formulaire de modification -->
<?php if (isset($modifForm)) echo $modifForm; ?>
<script>
  // Modifie les valeurs des 
  $(document).on('click','button',function(){
    if($(this).attr('name') != "modifierOK"){
    $('[name="id"]').val($(this).parent().parent().parent().find('td:first').text());
    $('[name="choix"]').val($(this).text());
    $('#form1').submit();
    } else {
      $('#form2').submit();
    }
  })

  $(document).on('change', 'input', function() {
    $('[name="modifierOK"]').trigger('click');
  });
</script>