<?php

require_once "../Model/bdd.php";
require "../View/ViewProduits/addProduit.php";

$bdd = new Bdd();

if (!empty($_POST['img']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['dispo']) && !empty($_POST['qte']) && !empty($_POST['type'])) {
  $img = $_POST['img'];
  $nom = $_POST['nom'];
  $prix = $_POST['prix'];
  $dispo = $_POST['dispo'];
  $qte = $_POST['qte'];
  $type = $_POST['type'];

  $bdd->addProduit($img, $nom, $prix, $dispo, $qte, $type);

  header("Location: ../Controller/gestionProduits_controller.php");
}

