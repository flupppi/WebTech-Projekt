<?php
require_once 'header.php';
?>
<h1 class="w3-center">Login</h1>
<?php
error_reporting(E_ERROR | E_PARSE);
if (isset($_GET['error'])){
    if ($_GET['error'] == "emptyfields"){
        echo '<p class="w3-red w3-center">Fill in all fields!</p>';
    }
    else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="w3-red w3-center ">invalid username and e-mail!</p>';
    }else if ($_GET['error'] == "invaliduid") {
        echo '<p class="w3-red w3-center">invalid username! A username must be between 5 and 32 characters long
                      and can only contain numbers and letters form the latin Alphabet</p>';
    }else if ($_GET['error'] == "invalidmail") {
        echo '<p class="w3-red w3-center">invalid e-mail!</p>';
    }else if ($_GET['error'] == "passwordcheck") {
        echo '<p class="w3-red w3-center">Your passwords do not match!</p>';
    }else if ($_GET['error'] == "userTaken") {
        echo '<p class="w3-red w3-center">Username is already taken!</p>';
    }
} elseif ($_GET['signup'] == "success"){
    echo '<p class="w3-green">Signup successful!</p>';
}
?>
<form action="../includes/login.inc.php" method="post" class="w3-center">
    <input type="text" name="mailuid" placeholder="Username/E-mail...">
    <input type="password" name="pwd" placeholder="Password...">
    <button type="submit" name="login-submit">Login</button>
</form>
