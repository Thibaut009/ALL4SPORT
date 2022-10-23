requête sql :

afficher la liste des produits du panier d'un client :

SELECT nom_produit, qte
FROM `produits`
INNER JOIN `panier` on fk_produit = id_produit
INNER JOIN `users` on fk_user = id_user
WHERE 1
