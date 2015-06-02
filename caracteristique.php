<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 01/06/2015
 * Time: 17:42
 */
session_start();
require_once('init.php');
if (array_key_exists($_GET['article'], $articles)) {
    $article = $_GET['article'];

    echo '<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Carecteristique Produit</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/caracteristiqueCss.css" type="text/css">
    <style>

    </style>
</head>
<body>
<section class="searchbar">
    <input id="searchinput" type="search" placeholder="Search">
</section>';

    require_once('headerMoreproduct.php');
    Head("/ Caractéristique / " . $article . "");


    echo "<div id='contenuWrapper'>
    <div>
        <img src='" . $articles[$article][1] . "'>
    </div>
    <div id='metasInformation'>
        <div id='title'>$article</div>
        <br>

        <div id='prix'>";
    echo $articles[$article][0];
    echo "</div>
        <div id='moreInformation'>
           From Canada Goose, a soft merino wool cap with a small logo patch. Features knit texture and can be worn slouchy or rolled as a beanie.
        </div>
        <a  id='browseProduct2' href='cart.php?nomarticle=" . $article . "'><i class='fa fa-cart-plus'></i>  Add to cart</a>
        <div id='fb-root'></div>
        <div class='fb-share-button' data-href='http://localhost:63342/test/project/caracteristique.html' data-layout='button'></div>
    </div>
</div>";

    require_once('footer.php');


    echo '</body>
<script src="script/jquery-1.11.1.min.js"></script>
<script src="script/Caracteristique.js"></script>
</html>';
} else {
    header('location:404.php');
}