<?php
function getUsers()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, username, is_online FROM user ORDER BY id');
    return $req;
}

function getUsersOnline()
{
    $db = dbConnect();
    $req = $db->query('SELECT id, username, is_online FROM user WHERE is_online = 1 ORDER BY id');
    return $req;
}

function getInfo($userId)
{
    $db = dbConnect();
    $str = 'SELECT username, first_name, family_name, gender, DATE_FORMAT(birth_date, \'%d/%m/%Y\') AS birth_date_fr, DATE_FORMAT(registration_date, \'%d/%m/%Y\') AS registration_date_fr FROM user WHERE id =\''.$userId.'\'';
    $req = $db->query($str);
    return $req;
}

function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}