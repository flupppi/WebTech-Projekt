<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="modeshop">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<header>
    <nav>
        <a>
           <!-- <img src="img/nature.png" class="w3-image "> -->
        </a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Home</a></li>
        </ul>
        <div>
            <?php
            if (ISSET($_SESSION['userId'])) {
                echo '   <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>';
            }else{
                echo '<form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                     </form>
                    <a href="signup.php">Signup</a>';
            }
            ?>
        </div>
    </nav>
</header>
</body>
</html>

niv