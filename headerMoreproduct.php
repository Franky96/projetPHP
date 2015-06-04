<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 31/05/2015
 * Time: 12:39
 */
function Head($title)
{
echo '<header>
    <div class="aside_container">
        <div id="icons">
              <span id="span3"  ';
    if (isset($_SESSION['PANIER'])) {
        $a = json_decode($_SESSION['PANIER'], true);
        if (count($a) == 0) {
            echo 'style="display: none"';
        }
    } else {
        echo 'style="display: none"';
    }
    echo '><a href="cart.php "><i class="fa fa-shopping-cart"></i>Cart (';
    if (isset($_SESSION['PANIER'])) {
        $a = json_decode($_SESSION['PANIER'], true);
        echo(count($a));
    };
    echo ')</a></span>
            <span id="span2"><i class="fa fa-search"></i></span>
            <span id="span1" onclick="animMenu()" ;><i id="menuicon" class="fa fa-bars fa-6"></i></span>
        </div>

        <div class="menu">
            <ul>
               <li><a href="index.php">Home</a></li>
                        <li><a href="moreProduct.php">Catalog</a></li>
                        <li><a href="moreProduct.php">Collection</a></li>
                        <li>News</li>
                        <li>About US</li>
            </ul>
        </div>
    </div>
    <div id="containerHeader">
        <h1>
            <a href="index.php">
                <img src="images/logo.png"/>
            </a>
            <span> ' . $title . '</span>
        </h1>
    </div>
</header>';
}


?>