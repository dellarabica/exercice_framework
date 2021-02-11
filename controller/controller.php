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