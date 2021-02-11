<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<p>Personnes connectées</p>

<table class="center">
    <tr>
        <th>ID</th>
        <th>Pseudo</th>
        <th>Est connecté</th>
        <th></th>
    </tr>
    <?php 
        while($row = $users->fetch()){   
    ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['username'] ?></td>
            <td>
            <?php if($row['is_logged'] == '0'){?>
            Non
            <?php } 
            else { ?>
            Oui
            <?php
            }  
            ?>
            </td>
            <td>
            <a href="index.php?action=moreinfo&amp;id=<?= $row['id'] ?>">Plus d'infos</a>
            </td>
        </tr>
<?php } 
$users->closeCursor();
?>
</table>
<br/>
<a href="index.php?action=listUser">
<input type="submit" value="Afficher tout le monde">
<!--
</a>
<a href="index.php?action=addUser">
<input type="submit" value="Ajouter un utilisateur">
</a>
<a href="index.php?action=removeUser">
<input type="submit" value="Retirer un utilisateur">
</a>-->
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>