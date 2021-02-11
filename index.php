<?php
require('controller/controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listUser') {
        listAllUsers();
    }
    elseif ($_GET['action'] == 'moreinfo') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            showInfo();
        }
    }
    elseif ($_GET['action'] == 'onlineOnly') {
        listOnlineUsers();
    }
    elseif ($_GET['action'] == 'addUser') {
       newUser();
    }
    elseif ($_GET['action'] == 'add'){
        if (!empty($_POST['username']) 
        && !empty($_POST['password'])
        && !empty($_POST['surname'])
        && !empty($_POST['family_name'])
        && !empty($_POST['gender'])
        && !empty($_POST['birth_date'])
        && !empty($_POST['is_logged'])) 
        {
            addUser($_POST['username'], $_POST['password'], $_POST['surname'], $_POST['family_name'], $_POST['gender'],$_POST['birth_date'], $_POST['is_logged']);
        }
        else {
            echo 'Erreur : tous les champs ne sont pas remplis !';
        }
        
    }
    elseif($_GET['action'] == 'removeUser'){
        delUser();
    }
    elseif ($_GET['action'] == 'del') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            removeUser();
        }
    }
}
else {
    listAllUsers();
}