<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 15:11
 */
session_start();
if (isset($_POST['login']) && isset($_POST['password'])) {

    $email = $_POST['login'];
    $pwd = $_POST['password'];


    $connexion = new mysqli('localhost', 'root', '', 'projetphp');
    if ($connexion->connect_errno) {
        echo 'Erreur de connexion';

    }
    $requete = "SELECT * FROM utilisateur WHERE email = '$email'  AND  pwd = '$pwd'";
    $res = $connexion->query($requete);

    if ($res && ($res->num_rows > 0)) {
        echo 'connexion reussie';
        if (isset($_SESSION["PANIER"])) {
            $a = json_decode($_SESSION['PANIER'], true);
            if (count($a) > 0) {
                header("location:cart.php");
            } else {
                header("location:index.php");
            }
        }

    } else {
        echo "connexion echouee";
        echo "Error: " . $requete . "<br>" . $connexion->error;
    }


    $connexion->close();
}


?>

<!--$requete = 'SELECT * FROM article WHERE `category` LIKE \'Pati%\'';-->
<!--$res = $connexion->query($requete);-->
<!--//var_dump($res->num_rows);-->
<!--if ($res && ($res->num_rows > 0)) {-->
<!--while ($valeur = $res->fetch_assoc()) {-->
<!--var_dump($valeur);-->
<!--}-->