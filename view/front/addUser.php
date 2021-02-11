<?php $title = 'Mon blog'; ?>

<?php ob_start(); ?>

<p>Page : Ajout d'utilisateur</p>

<fieldset class="card-border col-md-6 col-lg-6 d-block">
    <form action="index.php?action=add" method="post">
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
            <select name="gender">
                <option></option>
                <option value="M">Homme</option>
                <option value="F">Femme</option> 
                <option value="X">Non précisé</option>
            </select>
        </div>
        <div>
            <label for="birth_date">Date de naissance</label>
            <input type="date" id="birth_date" name="birth_date">
        </div>
        <div>
            <label for="is_logged">Apparaître en ligne</label>
            <select name="is_logged">
                <option></option>
                <option value="1">Oui</option>
                <option value="0">Non</option> 
            </select>
        </div>
        <br/>
        <br/>
        <div>
            <input type="submit" value="Valider">
            <a href="index.php?action=listUser">
                <input type="button" value="Annuler">
            </a>
        </div>
    </form>
</fieldset>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>