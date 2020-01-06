<?php
//check ob der User vom submit button kommt security and stuff
if (isset($_POST['signup-submit'])) {
    require 'dbh.inc.php'; //Datenbankverbindung

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($mail) || empty($password) || empty($passwordRepeat)) {    //Kein Feld darf leer sein
        header("Location: ../singnup.php?error=emptyfields&uid=" . $username . "&mail=" . $email); //schick die validen Eingaben zurück
        exit(); // Verlasse das Skript falls der Fehler auftrat
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*/", $username)) { //Usernamen dürfen nur aus a-z,A-Z,0-9 bestehen und die Email muss gültig sein
        header("Location: ../singnup.php?error=invalidmailuid"); //alle Eingaben falsch es wird nichts zurück gegeben
        exit(); // Verlasse das Skript falls der Fehler auftrat
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {    // die Email muss valide sein
        header("Location: ../singnup.php?error=invalidmail&uid=" . $username); //schick die validen Eingaben zurück
        exit(); // Verlasse das Skript falls der Fehler auftrat
    } else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {  //Usernamen dürfen nur aus a-z,A-Z,0-9 bestehen
        header("Location: ../singnup.php?error=invaliduid&mail=" . $email); //schick die validen Eingaben zurück
        exit(); // Verlasse das Skript falls der Fehler auftrat
    } else if ($password !== $passwordRepeat) { //Passwörter müssen übereinstimmen
        header("Location: ../singnup.php?error=passwordcheck&uid=" . $username . "&mail=" . $email); //schick die validen Eingaben zurück
        exit(); // Verlasse das Skript falls der Fehler auftrat
    } else { // Wenn die Eingaben valide sind
        $sql = "SELECT uidUsers FROM users WHERE  uidUsers = ?";
        $stmt = mysqli_stmt_init($conn);//
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error-sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username); // Pass string in the database
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) { //wenn die query nicht leer ist dann existiert der Name bereits
                header("Location: ../signup.php?error-userTaken&mail=" . $email); //schick http header mit der validen Email zurück
                exit();
            } else {
                $sql = "INSERT INTO users(uidUsers,emailUsers,pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                } else {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {                                           //user kommt nicht von dem Button
    header("Location ../public_html/signup.php");
    exit();
}