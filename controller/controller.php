<?php

require('./model/model.php');

function listAllUsers()
{
   $users = getUsers();

    require('./view/front/home.php');
}

function showInfo()
{
    $user = getInfo($_GET['id']);

    require('./view/front/moreInfo.php');
}


function listOnlineUsers()
{
    $users = getUsersOnline();

    require('./view/front/onlineUsers.php');
}

function delUser(){
    $users = getUsers();

    require('./view/front/deleteUser.php');
}

function removeUser(){
    $delete = del($_GET['id']);
    $reset = resetPK();
    if ($reset === false) {
        die('Erreur !');
    }
    else {
        header('Location: index.php?action=listUser');
    }
}