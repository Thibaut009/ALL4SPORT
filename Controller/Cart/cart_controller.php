<?php
session_start();
require_once "../../Model/bdd.php";
$bdd = new Bdd();

$listRayon = $bdd->getRayon();

if (!empty($_SESSION['pseudo'])) {
  $ProduitsCart = $bdd->getProduitsCart($_SESSION['pseudo']);
  require "../../View/ViewCart/view_cart.php";

} else {
  header("Location: ../../index.php");
}