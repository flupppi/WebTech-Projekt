<?php
require_once("users.php");
//global  $users;

$fileContents = file_get_contents('../data/users.txt');

//Unserialize the string back into an array.
$users = unserialize($fileContents);

function saveArr($users){
    $serialized = serialize($users);

//Save the serialized array to a text file.
    file_put_contents('../data/users.txt', $serialized);
}

function usernameExists($name)
{  global $users;
    foreach($users as $user){
        if($user->getUsername()==$name){
            return true;
        }
    }
    return false;
}
function emailExists($mail)
{  global $users;
    foreach($users as $user){
        if($user->getEmail() == $mail){
            return true;
        }
    }
    return false;
}

function getUserByMail($mail)
{  global $users;
    foreach($users as $user){
        if($user->getEmail()==$mail){
            return $user;
        }
    }
    return $user;
}