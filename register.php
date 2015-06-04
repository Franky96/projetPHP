<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 11:16
 */
session_start();
echo '<html>
        <head>
        <title>moreProduct</title>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/register.css" type="text/css">
         <link rel="stylesheet" href="style/moreProductCss.css" type="text/css">
        </head>
        <body>';
require_once('headerMoreproduct.php');
Head("");

?>
<form method="post" action="doRegister.php">

    <h3>Create New Account</h3>

    <input type="text" class="contentformulaire titreformulaire" placeholder="First Name" name="fistname"
           required="required">

    <input type="text" class="contentformulaire titreformulaire" placeholder="Last Name" name="lastname"
           required="required">

    <input type="text" class="contentformulaire" placeholder="Email" name="email" required="required">

    <input id="password" class="contentformulaire" type="password" name="pwd" placeholder="Password"
           required="required">

    <input class="contentformulaire" id="createAccount" type="submit" value="Create new account" required="required">

    <span>or<a id="returnStore" href="index.php"> Return to Store</a></span>

</form>


<?php
echo ' <script src="script/jquery-1.11.1.min.js"></script>
        <script src="script/Moreproduct.js"></script>

</body>
</html>';
?>

