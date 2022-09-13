<?php
include "../View/header.php"
?>

<h1>Affichage du produit</h1>

<table>
	<thead>
		<tr>
      <th>Id</th>
      <th>Nom</th>
		</tr>
	</thead>
	<tbody>
    <?php foreach($produitById as $produit){ ?> 
    <tr> 
      <td><?= $produit['id_produit'] ?></td> 
      <td><?= $produit['nom_produit'] ?></td> 
      <td><?= $produit['prix_produit'] ?></td> 
      <td><?= $produit['dispo_produit'] ?></td> 
      <td><?= $produit['qte_produit'] ?></td> 
    </tr> 
    <?php } ?>
	</tbody>
</table>