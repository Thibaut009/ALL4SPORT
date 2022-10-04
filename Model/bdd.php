<?php

class Bdd
{
  public $bdd;

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


  // Rayon BDD
  public function getRayon()
  {
    $sql = "SELECT * FROM rayon";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  // Produits BDD
  public function getProduits()
  {
    $sql = "SELECT * FROM produits";
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitById($id)
  {
    $sql = "SELECT id_produit, nom_produit, prix_produit, dispo_produit, qte_produit, img_produit 
            FROM produits 
            WHERE id_produit = ".$id;
            
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function getProduitsByRayon($rayon)
  {
    $sql = "SELECT * 
            FROM produits 
            WHERE fk_rayon = ".$rayon;
            
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function updateProduitById($id, $img, $nom, $prix, $dispo, $qte) 
  {
    $sql = "UPDATE produits 
            SET img_produit = '$img', nom_produit = '$nom', prix_produit = '$prix', dispo_produit = '$dispo', qte_produit = '$qte' 
            WHERE id_produit = ".$id;

    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
  }

  public function deleteProduitById($id)
  {
    $sql = "DELETE FROM produits WHERE id_produit = ".$id;
    $query =  $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    var_dump($sql);
  }

  public function addProduit($img, $nom, $prix, $dispo, $qte, $rayon)
  {
    $sql = "INSERT INTO produits(img_produit, nom_produit, prix_produit, dispo_produit, qte_produit, fk_rayon) 
            VALUES(:img, :nom, :prix, :dispo, :qte, :rayon) ";
            
    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":img" => $img,
                          ":nom" => $nom,
                          ":prix" => $prix,
                          ":dispo" => $dispo,
                          ":qte" => $qte,
                          ":rayon" => $rayon));
    return $query->fetchAll();
  }
}

