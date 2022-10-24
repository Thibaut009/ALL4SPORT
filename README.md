requête sql :

afficher la liste des produits du panier d'un client :

SELECT nom_produit, qte 
FROM panier_produits 
INNER JOIN panier on fk_panier = id_panier
INNER JOIN produits on fk_produit = id_produit
INNER JOIN users on fk_user = id_user AND id_user = 36
