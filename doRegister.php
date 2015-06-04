<?php
/**
 * Created by PhpStorm.
 * User: omar
 * Date: 03/06/2015
 * Time: 13:35
 */


if (isset($_POST['fistname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pwd'])) {

    $prenom = $_POST['fistname'];
    $nom = $_POST['fistname'];
    $email = $_POST['fistname'];
    $pwd = $_POST['fistname'];


    $connexion = new mysqli('localhost', 'root', '', 'projetphp');
    if ($connexion->connect_errno) {
        echo 'Erreur de connexion';
        exit;
    }
    $requete = "INSERT INTO utilisateur (nomutil, prenomutil, email, pwd) VALUES ('$prenom', '$nom', '$email', '$pwd')";


    if ($connexion->query($requete) === TRUE) {
        echo "New record created successfully";
        sleep(3);
        header('location:logIn.php');
    } else {
        echo "Error: " . $requete . "<br>" . $connexion->error;
    }

    $connexion->close();
}




?>

<!--$res = $connexion->query($requete);-->
<!--//var_dump($res->num_rows);-->
<!--if ($res && ($res->num_rows > 0)) {-->
<!--while ($valeur = $res->fetch_assoc()) {-->
<!--var_dump($valeur);-->
<!--}-->
<!--}-->