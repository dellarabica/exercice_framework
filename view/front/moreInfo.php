<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<p>Plus d'infos</p>

<fieldset class="card-border col-md-6 col-lg-6 d-block">
<?php
    $data = $user->fetch();
?>
<p>Pseudo : <?= $data['username']?> <br/></p>
<p>Prénom : <?= $data['first_name']?><br/></p>
<p>Nom de famille : <?= $data['family_name']?><br/></p>
<p>Genre : 
<?php
if($data["gender"] == "M"){
    echo 'Masculin';
}
elseif ($data["gender"] == "F"){

echo 'Féminin';
}
elseif ($data["gender"] == "X"){ 
echo 'Non spécifié';
 } 
 ?>
<br/></p>
<p>Date de naissance : <?= $data['birth_date_fr']?><br/></p>
<p>Inscription le : <?= $data['registration_date_fr']?><br/></p>

</fieldset>

<a href="index.php?action=listUser">
<input type="submit" value="Retour">
</a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>