<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$listRayon = $bdd->getRayon();

if (!empty($_SESSION['pseudo'])) {
  $listProduitsCart = $bdd->getProduitsCart($_SESSION['pseudo']);
  require "../../View/ViewCart/view_cart.php";

} else {
  $produits = $bdd->getProduits();
  header("Location: ../../index.php");
}