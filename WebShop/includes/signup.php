<section id="signup" class="w3-hide">
<h2 class="w3-xlarge w3-bold w3-margin-left"> Signup</h2>

    <form class="w3-container w3-padding-16" action="../includes/signup.inc.php" method="post">

    <label class="w3-medium w3-bold" >Username</label>
    <input class="w3-input  " type="text" placeholder="Enter Username" name="uid" required>

    <label class="w3-medium w3-bold">E-Mail</label>
    <input class="w3-input  " type="text" placeholder="Enter E-Mail-Address" name="mail" required>

    <label class="w3-medium w3-bold ">Password</label>
    <input class="w3-input"   type="password" placeholder="Enter Password" name="pwd" required>

    <label class="w3-medium w3-bold ">Confirm Password</label>
    <input class="w3-input "  type="password" placeholder="Confirm Password" name="pwd-repeat" required>

    <button class="w3-button w3-green w3-mobile w3-margin-top w3-margin-bottom w3-col m2  " type="submit" name="signup-submit">Signup</button>
    <button type="button" class="w3-button  w3-red w3-margin-top w3-mobile  w3-right">Cancel</button>

</form>
</section>

