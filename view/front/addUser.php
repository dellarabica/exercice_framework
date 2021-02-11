<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<p>Ajout d'utilisateur</p>


<form action="index.php" method="post">
<fieldset class="card-border col-md-6 col-lg-6 d-block">
    <div>
        <label for="username">Pseudo</label>
        <input type="text" id="username" name="username" />
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="text" id="password" name="password" />
    </div>
    <div>
        <label for="surname">Prénom</label>
        <input type="text" id="surname" name="surname" />
    </div>
    <div>
        <label for="family_name">Nom de famille</label>
        <input type="text" id="family_name" name="family_name" />
    </div>
    <div>
        <label for="gender">Genre</label>
        <input type=text list=gender >
        <datalist id=gender >
            <option> Homme
            <option> Femme
            <option> Non précisé
        </datalist>
    </div>
    <div>
        <label for="birth_date">Date de naissance</label>
        <input type="date" id="birth_date" name="birth_date">
    </div>
    <div>
        <label for="is_logged">Apparaître en ligne</label>
        <input type=text list=is_logged >
        <datalist id=is_logged >
            <option> Oui
            <option> Non
        </datalist>
    </div>
    <br/>
    <br/>
    <div class="buttons">
            <input type="submit" value="Valider">
        <a href="index.php?action=listUser">
                <input type="submit" value="Annuler">
        </a>
    </div>
</fieldset>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>