<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 31/05/2015
 * Time: 12:14
 */
session_start();
require_once('init.php');

echo '<html>
        <head>
        <title>moreProduct</title>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/moreProductCss.css" type="text/css">
          <link rel="stylesheet" href="style/caracteristiqueCss.css" type="text/css">



        </head>

        <body>
        <section class="searchbar">
            <input id="searchinput" type="search" placeholder="Search">
        </section>';
require_once('headerMoreproduct.php');
Head("/ Collection");

echo '<div id="ProductTitle">
  <div class="select">
    <select class="sel" name="update[]" onchange="geturl(this)";>
        <option value="All" selected="selected">ALL Products</option>
        <option value="Beds">Beds</option>
        <option value="Shirts">Shirts</option>
        <option value="Trousers">Trousers</option>
        <option value="Drawers">Drawers</option>
        <option value="Chairs">Chairs</option>
        <option value="Decoration">Decoration</option>
        <option value="Bags">Bags</option>
        <option value="Tents">Tents</option>
        <option value="Boxes">Boxes</option>
        <option value="Shoes">Shoes</option>
    </select>

    <div class="iconDownn">
        <i class="fa fa-chevron-down"></i>
    </div>
         </div>
             <h2>Featured Products</h2>


</div>
         <div id="ProductWrapper">
         <div id="ProductContent">
         <div id="premiere_page">';


if (isset($_GET['categ'])) {
    $categ = $_GET['categ'];
    if ($categ == "ALL Products") {
        affiche_tout($articles);
    } else {
        foreach ($articles as $nomarticle => $contenu) {
            if ($categ == $contenu[3]) {
                echo " <div class='produit'>
                     <a href='caracteristique.php?article=" . $nomarticle . "'><img src='" . $contenu[1] . "'></a>

                      <div class='info'>
                          <div class='metas'>
                          <div class='title'>$nomarticle</div>
                          <div>
                              <span class='price'>$contenu[0]</span>
                          </div>
                         </div>
                      <div class='status'>
                        <a href='caracteristique.php?article=" . $nomarticle . "'>Buy</a>
                    </div>
                     </div>
          </div>";
            }

        }
    }

}

if ($_SERVER["REQUEST_URI"] == $_SERVER['PHP_SELF']) {

    affiche_tout($articles);

}

echo '</div>
         </div>
         </div>
         <button id="browseProduct2">Browse our products</button>
         <div class="spinner">
             <div class="bounce1"></div>
             <div class="bounce2"></div>
             <div class="bounce3"></div>
         </div>';


require_once('footer.php');
echo ' <script src="script/jquery-1.11.1.min.js"></script>
        <script src="script/Moreproduct.js"></script>
        <script src="script/main.js"></script>
        <script>
    document.getElementById("searchinput").addEventListener("keydown", keyDownTextField, false);
</script>

</body>
</html>';

function affiche_tout($tableau)
{
    foreach ($tableau as $nomarticle => $contenu) {

        echo " <div class='produit'>
                     <a href='caracteristique.php?article=" . $nomarticle . "'><img src='" . $contenu[1] . "'></a>

                      <div class='info'>
                          <div class='metas'>
                          <div class='title'>$nomarticle</div>
                          <div>
                              <span class='price'>$contenu[0]</span>
                          </div>
                         </div>
                      <div class='status'>
                        <a href='caracteristique.php?article=" . $nomarticle . "'>Buy</a>
                    </div>
                     </div>
          </div>";

    }
}
?>

