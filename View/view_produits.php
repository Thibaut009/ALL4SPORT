<?php
include "../View/header.php"
?>

<h1>Produits</h1>

<table>
	<thead>
		<tr>
      <th>Id</th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Disponibilité</th>
      <th>Quantité</th>
      <th>Lien</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach($produits as $produit){ ?> 
    <tr> 
      <td><?= $produit['id_produit'] ?></td> 
      <td><?= $produit['nom_produit'] ?></td>
      <td><?= $produit['prix_produit'] ?></td>
      <td><?= $produit['dispo_produit'] ?></td> 
      <td><?= $produit['qte_produit'] ?></td> 
      <td>
        <a href="produits.php?id=<?= $produit['id_produit'] ?>">Voir</a> 
      </td> 
    </tr> 
    <?php } ?>
	</tbody>
</table>




<style>

  h1 {
    text-align: center;
  }

  table,td,th {
    margin: auto;
    margin-bottom: 100px;
    border: 1px solid #111;
    border-collapse: collapse;
  }

  th{
    height: 50px;
  }

  table{
    width: 800px;
    height: 200px;
    text-align: center;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
  }

</style>