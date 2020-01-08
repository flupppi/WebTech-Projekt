<?php
session_start();
echo "<pre>";
print_r($_SESSION);
include "header.php"
?>
<main>
    <?php
        if (isset($_SESSION['userId'])) {
            echo '<p class=login-status">You are logged in!</p>';
        }else{
            echo '<p class=login-status">You are logged out!</p>';
        }
    ?>
</main>