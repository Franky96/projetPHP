<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 01/06/2015
 * Time: 20:54
 */
session_start();
require_once('init.php');
echo '<html>
        <head>
             <title>Panier</title>
              <link href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext" rel="stylesheet" type="text/css">
              <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
             <link rel="stylesheet" href="style/panier.css" type="text/css">
        </head>
        <body>
<div class="header">
    <div>
        <h1>
            <a href="index.html">
                <img src="images/logo.png">
            </a>
        </h1>
    </div>
</div>
<div class="ContenuWrapper">
    <div class="headerContenu">
        <h2>Shopping Cart</h2>
    </div>
    <form>
        <div class="contenuCart">';

if (count($_SESSION) == 0) {
    $a = array();
    if (array_key_exists($_GET['nomarticle'], $articles)) {
        array_push($GLOBALS["a"], $_GET['nomarticle']);
        $_SESSION['PANIER'] = json_encode($a);

        echo ' <div class="cont1">
                <div class="select">
                    <select name="update[]" onchange="calculFacture()">
                        <option value="1" selected="selected">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>

                    <div class="iconDown">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
                <img src="images/two_grande.jpg">

                <div class="info">
                    <span class="title">Blue Shirt</span>
                    <span class="subTitle">$220,00 - <a id="supprimer" href="#<!--/cart?remove=yes-->" onclick="supprimer(this)";>Remove</a></span>
                </div>
                <div class="price">
                    <span>$220,00</span>
                </div>
            </div>';

    } else {
        header('location:404.php');

    }


} else {
    if (array_key_exists($_GET['nomarticle'], $articles)) {

        if (ExisteDansPanier(json_decode($_SESSION['PANIER'], true), $_GET['nomarticle']) == false) {
            $a = json_decode($_SESSION['PANIER'], true);
            array_push($a, $_GET['nomarticle']);
            $_SESSION['PANIER'] = json_encode($a);
        }
    }
}
echo ' </div>
        <div class="footerContenuCart">
            <div class="left">
                <a href="moreProduct.html">Add more Products</a>
            </div>
            <div class="right">
                <span id="labeltotale">Subtotal</span>
                <span id="totale">$220.00</span>
            </div>
        </div>
    </form>
</div>
</body>
</html>';