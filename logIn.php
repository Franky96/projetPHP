<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 01:09
 */
echo '<html>
        <head>
        <title>LOG IN</title>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/login.css" type="text/css">
         <link rel="stylesheet" href="style/moreProductCss.css" type="text/css">
        </head>

        <body>';
require_once('headerMoreproduct.php');
Head("");

?>

<div class="formulaire">
    <h2>Are you a new client?</h2>

    <h4>Create new account.</h4>
    <a id="register" href="register.php">Register</a>
</div>
<div class="formulaire" id="connexion">
    <h2>Already registered?</h2>
    <h4>Start a new session.</h4>

    <form method="post" action="connexion.php">
        <input class="champinput" id="login" type="text" name="login" placeholder="Email" required="required" <br>
        <input class="champinput" id="password" type="password" name="password" placeholder="Password"
               pattern="/^[a-z0-9_-]{6,18}$/" required="required">
        <input id="signin" type="submit" value="Sign In">
    </form>

    <!--<div><a>Forgot your password?</a></div>-->
</div>


<?php
echo ' <script src="script/jquery-1.11.1.min.js"></script>
        <script src="script/Moreproduct.js"></script>

</body>
</html>';
?>

