<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$listRayon = $bdd->getRayon();

if (!empty($_SESSION['pseudo'])) {
  $ProduitsCart = $bdd->getProduitsCart($_SESSION['pseudo']);
  require "../../View/ViewCart/view_cart.php";

} else {
  $_SESSION['id_rand'] = rand();
  $panier = array($img_produit, $nom_produit, $prix_produit, $qte_produit);
  $_SESSION['monPanier'] = $panier;

  header("Location: ../../index.php");
}