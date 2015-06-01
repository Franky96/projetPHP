<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 31/05/2015
 * Time: 12:14
 */
require_once('init.php');

echo '<html>
        <head>
        <title>moreProduct</title>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/moreProductCss.css" type="text/css">
        </head>

        <body>';
require_once('headerMoreproduct.php');
Head("/ Collection");

echo '<div id="ProductTitle">
             <h2>Featured Products</h2>
         </div>
         <div id="ProductWrapper">
         <div id="ProductContent">
         <div id="premiere_page">';

$compteur = 1;

foreach ($articles as $nomarticle => $contenu) {

    echo " <div class='produit'>
                     <a href='caracteristique.php?" . $nomarticle . "'><img src='" . $contenu[1] . "'></a>

                      <div class='info'>
                          <div class='metas'>
                          <div class='title'>$nomarticle</div>
                          <div>
                              <span class='price'>$contenu[0]</span>
                          </div>
                         </div>
                      <div class='status'>
                        <a href='#'>Buy</a>
                    </div>
                     </div>
          </div>";

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

</body>
</html>';


?>

