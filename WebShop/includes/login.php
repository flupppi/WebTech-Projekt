<section id="login"class="w3-hide">
<h2 class="w3-xlarge w3-bold w3-margin-left"> Login</h2>
<form class="w3-container w3-padding-16" action="/action_page.php" method="post">

    <label class="w3-medium w3-bold">Username</label>
    <input class="w3-input" type="text" placeholder="Enter Username" name="uname" required>

    <label class="w3-medium w3-bold ">Password</label>
    <input class="w3-input" type="password" placeholder="Enter Password" name="psw" required>

    <button class="w3-button w3-green w3-mobile w3-margin-top w3-margin-bottom w3-col m2  " type="submit">Signup</button>
    <button type="button" class="w3-button  w3-red w3-margin-top w3-mobile  w3-right">Cancel</button>
    <div class="w3-row">
        <input class="w3-check " type="checkbox" checked="checked" name="remember"> <label>Remember me</label>
        <span class="w3-right">Forgot <a href="#">password?</a></span>
    </div>


</form>
</section>