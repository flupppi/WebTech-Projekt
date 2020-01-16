<?php

session_start();

if(isset($_POST['login-submit'])){

    require_once 'usersHandler.inc.php';

     $mail     = isset($_POST['mailuid']) ? $_POST["mailuid"] : null;
     $password = isset($_POST['pwd'])     ? $_POST["pwd"]     : null;

    if(empty($mail) || $mail === null || empty($password) || $password === null) {
        header("Location: ../public_html/index.php?error=emptyfields");
    } else {
            if (emailExists($mail)) {
                $user=getUserByMail($mail);
                $pwdCheck = password_verify($password, $user->getPassword());
                if ($pwdCheck == false) {
                    header("Location: ../public_html/index.php?error=wrongpwd");
                    exit();
                }
                else if ($pwdCheck === true){
                    $_SESSION['userId'] = $user->getUsername();
                    print_r($_SESSION);
                    header("Location: ../public_html/index.php?login=success");
                    exit();
                }
            } else {
                header("Location: ../public_html/index.php?error=nouser");
                exit();
            }
        }

}else{
    header("Location: ../public_html/index.php");
}
?>