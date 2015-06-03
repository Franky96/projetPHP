<?php


// $articles = array('nom article' => array( 'prix' , 'url image' , 'stock' , 'catégorie');
$articles = array(
    'Bed Frame' => array('$150.00', 'images/7_grande.jpeg', '5', 'Beds'),
    'Blue Bag' => array('$120.00', 'images/27_grande.jpeg', '6', 'Bags'),
    'Blue Shirt' => array('$70.00', 'images/two_grande.jpg', '12', 'Shirts'),
    'Blue Sweater' => array('$80.00', 'images/two-c_2ee6ddb8-d636-4eb4-9f59-a1e058f37cc3_grande.jpg', '18', 'Shirts'),
    'Blue Sweater(H)' => array('$99.000', 'images/15_grande.jpeg', '2', 'Shirts'),
    'Blue Trousers' => array('$115.00', 'images/16_grande.jpeg', '20', 'Trousers'),
    'Chest of Drawers' => array('$120.00', 'images/4_grande.jpeg', '19', 'Drawers'),
    'Color Carpet' => array('$25.00', 'images/12_grande.jpeg', '14', 'Chairs'),
    'Dark Coat' => array('$70.00', 'images/19_grande.jpeg', '16', 'Shirts'),
    'Decoration Letter' => array('$12.00', 'images/26_grande.jpeg', '17', 'Decoration'),
    'Exotic Chair' => array('$80.00', 'images/9_grande.jpeg', '13', 'Chairs'),
    'Green Coat' => array('$135.00', 'images/14_grande.jpeg', '9', 'Shirts'),
    'Grey Backpack' => array('$175.00', 'images/7_grande.jpeg', '14', 'Bags'),
    'Marled Grey Shirt' => array('$160.00', 'images/two-b_fc3d9ec2-b86d-4762-b4d6-41a720563107_grande.jpg', '6', 'Shirts'),
    'Oak Bed' => array('$100.00', 'images/7_grande.jpeg', '3', 'Beds'),
    'Oak Chair' => array('$22.00', 'images/0_grande.jpeg', '5', 'Chairs'),
    'Outdoor Tents' => array('$62.000', 'images/25_grande.jpeg', '6', 'Tents'),
    'Plant Boxes' => array('$76.00', 'images/24_grande.jpeg', '1', 'Boxes'),
    'Plants Drawers' => array('$33.00', 'images/6_grande.jpeg', '4', 'Drawers'),
    'Red Hat and Worf' => array('$26.00', 'images/22_17c2e942-0ebd-417c-b82b-baa8d46027fc_grande.jpeg', '4', 'Shirts'),
    'Redwood Bed' => array('$325.00', 'images/2_grande.jpeg', '3', 'Beds'),
    'School Chairs' => array('$15.00', 'images/10_grande.jpeg', '3', 'Chairs'),
    'Sofa' => array('$69.00', 'images/5_grande.jpeg', '15', 'Chairs'),
    'Soft Merino' => array('$80.00', 'images/one_grande.jpg', '2', 'Shirts'),
    'Summer Chair' => array('$45.00', 'images/20_grande.jpeg', '3', 'Chairs'),
    'Summer House Stair' => array('$220.00', 'images/21_grande.jpeg', '1', 'Decoration'),
    'Summer Sandals' => array('$40.00', 'images/23_grande.jpeg', '4', 'Shoes'),
    'Sutto Bench' => array('$99.00', 'images/1_grande.jpeg', '9', 'Chairs'),
    'Vintage Sofa' => array('$255.00', 'images/11_grande.jpeg', '1', 'Chairs'),
    'White Bed' => array('$118.00', 'images/28_grande.jpeg', '3', 'Beds'),
);


//tester si l'article a ajouter dans le panier existe déja ou non dans le panier  (si oui on l'ignore)
function ExisteDansPanier($panier, $article)
{
    $compteur = 0;
    foreach ($panier as $nomarticle) {
        if ($article == $nomarticle) {
            break;
        } else {
            $compteur++;
        }
    }
    if ($compteur == count($panier)) {
        return false;
    } else {
        return true;
    }
}

// function affiche panier afin de minimiser le code

function affiche_panier($tableau)
{
    $a = json_decode($_SESSION['PANIER'], true);
    foreach ($a as $nomarticle) {
        $b = $tableau[$nomarticle];
//                var_dump($_SESSION);
//                echo "3";
//                ****************
        echo ' <div class="cont1">
                <div class="select">
                     <select name="';
        echo $nomarticle;
        echo '" onchange="getnombre(this);calculFacture()"; >
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
                <img src=';
        echo $b[1];
        echo '>

                <div class="info">
                    <span class="title">';
        echo $nomarticle;
        echo '</span>
                      <span class="subTitle">';
        echo $b[0];
        echo ' - <a id="supprimer" href="cart.php?supprimer=';
        echo $nomarticle;
        echo '" onclick="supprimer(this)";>Remove</a></span>
                </div>
                <div class="price">
                    <span>$220,00</span>
                </div>
            </div>';
//             *****************
    }
}