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
    $sql = "SELECT id_produit, nom_produit, prix_produit, dispo_produit, qte_produit, img_produit 
            FROM produits 
            WHERE id_produit = ".$id;
            
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

  public function addProduit($img, $nom, $prix, $dispo, $qte, $type)
  {
    echo("coucou");
    $sql = "INSERT INTO produits(img_produit, nom_produit, prix_produit, dispo_produit, qte_produit, type_produit) 
            VALUES(:img, :nom, :prix, :dispo, :qte, :type ) ";

    $query =  $this->bdd->prepare($sql);
    $query->execute(array(":img" => $img,
                          ":nom" => $nom,
                          ":prix" => $prix,
                          ":dispo" => $dispo,
                          ":qte" => $qte,
                          ":type" => $type));
    return $query->fetchAll();
  }

}

