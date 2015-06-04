<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 22:55
 */
session_start();

require_once('init.php');

echo '<html>
        <head>
        <title>moreProduct</title>
         <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style/moreProductCss.css" type="text/css">
        <style>
        h3 {
          font-family: "Lato","Helvetica Neue",Helvetica,Arial,sans-serif;
          font-weight: 300;
          font-style: normal;
          font-size: 30px;
          color: #616161;
          font-weight: 300;
          margin: 10px 0 5px;
          margin-left: 134px;
          margin-top: 20px;
        }
        h3 span{
        color: crimson;
        font-weight: bold;
         font-size: 30px;
        }




        </style>

        </head>

        <body>';
if (isset($_GET['query'])) {


    require_once('headerMoreproduct.php');
    Head("/ Search / " . $_GET['query']);

    echo '<div id="ProductTitle">

             <h3 >Search results for <span>';
    echo $_GET['query'];
    echo ' </span>:</h3>


</div>
         <div id="ProductWrapper">
         <div id="ProductContent">
         <div id="premiere_page">';
    $query = $_GET['query'];
    $query = strtolower($query);

    $compteur = 0;
    foreach ($articles as $nomarticle => $contenu) {
        $nomarticle = strtolower($nomarticle);

        if (preg_match('#' . $query . '#', $nomarticle)) {

            $compteur++;

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
    if ($compteur == 0) {
        echo '<div id="msgErreur">
            <h4>There are no products</h4>
            </div>';
    }


    echo '</div>
         </div>
         </div>';


    require_once('footer.php');
    echo ' <script src="script/jquery-1.11.1.min.js"></script>
        <script src="script/Moreproduct.js"></script>';
}

echo '</body>
</html>';



?>

