<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<p>Page : Suppression d'utilisateur</p>

<table class="center">
    <tr>
        <th>ID</th>
        <th>Pseudo</th>
        <th>Supprimer?</th>
    </tr>
    <?php 
        while($row = $users->fetch()){   
    ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
        <td>
            <a href="index.php?action=del&amp;id=<?= $row['id'] ?>">
                <input type="submit" value="❌">
            </a>
        </td>
    </tr>
    <?php } 
        $users->closeCursor();
    ?>
</table>
<br/>

<a href="index.php?action=listUser">
    <input type="submit" value="Annuler">
</a>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>