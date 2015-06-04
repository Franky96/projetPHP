<?php

session_start()
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
<section class="searchbar">
    <input id="searchinput" type="search" placeholder="Search">
</section>
<div class="page_Wrapper">
    <section class="slide1" id="Slide1">
        <div class="imageDefond" id="imagefond">
            <div class="opacity"></div>
            <div class="contentCenter">
                <div id="logo"><a href="index.php"><img src="images/logo.png" alt="logo"> </a></div>
                <hr>
                <h2>We make honest products,<br>
                    <span>durable and timeless</span></h2>
                <a id="browseProduct" href="moreProduct.php" target="_blank">Browse our products</a>
            </div>
            <div class="aside_container">
                <div id="icons">
                    <span id="span3"  <?php $a = json_decode($_SESSION['PANIER'], true);
                    if (count($a) == 0) {
                        echo 'style="display: none"';
                    } ?> ><a href="cart.php "><i class="fa fa-shopping-cart"></i>Cart
                            (<?php $a = json_decode($_SESSION['PANIER'], true);
                            echo(count($a)); ?>)</a></span>
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
            <a id="scrolldown" href="#slide2" data-action="scroll">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
        </div>

    </section>
    <section id="slide2" class="slide2">
        <div id="ProductTitle">
            <h2>Featured Products</h2>
        </div>
        <div id="ProductWrapper">
            <div id="ProductContent">
                <div class="produit">
                    <a href="caracteristique.php?article=Soft Merino"><img src="images/one_grande.jpg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Sof Merino</div>
                            <div>
                                <span class="price">$240.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Blue Shirt"><img src="images/two_grande.jpg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Blue Shirt</div>
                            <div>
                                <span class="price">$220.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Marled Grey Shirt"><img
                            src="images/two-b_fc3d9ec2-b86d-4762-b4d6-41a720563107_grande.jpg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Marled Grey Shirt</div>
                            <div>
                                <span class="price">$120.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Blue Sweater"><img
                            src="images/two-c_2ee6ddb8-d636-4eb4-9f59-a1e058f37cc3_grande.jpg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Blue Sweater</div>
                            <div>
                                <span class="price">$80.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Blue Sweater(H)"><img src="images/15_grande.jpeg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Blue Sweater(H)</div>
                            <div>
                                <span class="price">$200.000</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Blue Trousers"><img src="images/16_grande.jpeg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Blue Trousers</div>
                            <div>
                                <span class="price">$115.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Red Hat and Worf"><img
                            src="images/22_17c2e942-0ebd-417c-b82b-baa8d46027fc_grande.jpeg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Red Hat and Worf</div>
                            <div>
                                <span class="price">$45.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>
                <div class="produit">
                    <a href="caracteristique.php?article=Summer Sandals"><img src="images/23_grande.jpeg"></a>

                    <div class="info">
                        <div class="metas">
                            <div class="title">Summer Sandals</div>
                            <div>
                                <span class="price">$70.00</span>
                            </div>
                        </div>
                        <div class="status">
                            <a href="#">Buy</a>
                        </div>
                    </div>
                </div>

            </div>
            <a id="browseProduct2" target="_blank" href="moreProduct.php">Browse our products</a>

        </div>
    </section>
    <section class="slide3_footer">

        <?php require_once('footer.php'); ?>

    </section>

</div>

<script src="script/jquery-1.11.1.min.js"></script>
<script src="script/main.js"></script>
<script>
    document.getElementById("searchinput").addEventListener("keydown", keyDownTextField, false);
</script>

</body>

</html>