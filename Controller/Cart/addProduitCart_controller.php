<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

if (isset($_GET['id_produit']) && !empty($_SESSION['pseudo'])) {
    echo('dddd');
    $pseudo = $_SESSION['pseudo'];
    $id_produit = $_GET['id_produit'];

    $addProduitCart = $bdd->addProduitCart($pseudo, $id_produit);
    header("Location: ../Produits/produits_controller.php");
}