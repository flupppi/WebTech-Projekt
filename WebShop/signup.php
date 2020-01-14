<?php
require "header.php";
?>

<main>
    <h1>Signup</h1>
    <?php
        if (isset($_GET['error'])){
            if ($_GET['error'] == "emptyfields"){
                echo '<p class="w3-red">Fill in all fields!</p>';
            }
            else if ($_GET['error'] == "invaliduidmail") {
                echo '<p class="w3-red">invalid username and e-mail!</p>';
            }else if ($_GET['error'] == "invalidui") {
                echo '<p class="w3-red">invalid username!</p>';
            }else if ($_GET['error'] == "invalidmail") {
                echo '<p class="w3-red">invalid e-mail!</p>';
            }else if ($_GET['error'] == "passwordcheck") {
                echo '<p class="w3-red">Your passwords do not match!</p>';
            }else if ($_GET['error'] == "userTaken") {
                echo '<p class="w3-red">Username is already taken!</p>';
            }
        } elseif ($_GET['signup'] == "success"){
            echo '<p class="w3-green">Signup successful!</p>';
        }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwd-repeat" placeholder="Repeat password">
        <button type="submit" name="signup-submit">Signup</button>
    </form>
</main>

