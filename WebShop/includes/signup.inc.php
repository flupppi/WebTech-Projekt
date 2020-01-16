<?php
//check ob der User vom submit button kommt security and stuff
// var_dump($_POST);
if (isset($_POST['signup-submit'])) {
    require 'usersHandler.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    /*Kein Feld darf leer sein*/

    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
        /*schick die validen Eingaben zurück*/
        header("Location: ../public_html/index?error=emptyfields&uid=" . $username . "&mail=" . $email);
        /*Verlasse das Skript falls der Fehler auftrat*/
        exit();
    }
    /*Usernamen dürfen nur aus a-z,A-Z,0-9 bestehen, wobei die länge zwischen 5 und 31 ist und es mit einem Buchstaben
     anfangen soll
     und die Email muss gültig sein*/
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $username)) {
        header("Location: ../public_html/index.php?error=invalidmailuid");
        exit();
    }
    /*Check ob die Email valide ist*/
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../public_html/index.php?error=invalidmail&uid=" . $username);
        exit();
    }
    /*Usernamen dürfen nur aus a-z,A-Z,0-9 bestehen*/
    else if (!preg_match('/^[A-Za-z]{1}[A-Za-z0-9]{5,31}$/', $username)) {
        header("Location: ../public_html/index.php?error=invaliduid&mail=" . $email);
        exit();
    } /*Passwörter müssen übereinstimmen*/
    else if ($password !== $passwordRepeat) {
        header("Location: ../public_html/index.php?error=passwordcheck&uid=" . $username . "&mail=" . $email);
        exit();
    } else {
        /*Check ob der Username bereits vorhanden ist*/
        if (usernameExists($username)) {
            header("Location: ../public_html/index.php?error=userTaken&mail=" . $email);
            exit();
        } else {
            /*Hashpasswort nach dem neusten Algorithmus*/
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            $users[count($users) + 1] = new users($username, $email, $hashedPwd);

            //var_dump($users);
            savearr($users);
            header("Location ../public_html/index.php?signup=success");
            exit();
        }
    }
} else {  //user kommt nicht von dem Button
    header("Location ../public_html/index.php");
    exit();
}