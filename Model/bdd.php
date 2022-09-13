<?php

class Bdd
{
  private $bdd;

  public function __construct()
  {
    $dsn = 'mysql:dbname=ALL4SPORT;host=127.0.0.1:3306';
    $dbUser = 'root';
    $dbPwd = '';

    try {
      $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }

  public function getProduits()
  {
    $sql = "SELECT * FROM produits;";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitById($id)
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, dispo_produit, qte_produit FROM produits WHERE id_produit = ".$id;
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

}