<?php

require_once "../Model/bdd.php";

$bdd = new Bdd();

$id = $_GET['id'];
$produitById = $bdd->deleteProduitById($id);

header("Location: ../Controller/gestionProduits_controller.php");