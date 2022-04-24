<?php


// Cart

foreach ($catalog

as $id => $cookie) { ?>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
    <figure class="thumbnail text-center">
        <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
        <figcaption class="caption">
            <h3><?= $cookie['name']; ?></h3>
            <p><?= $cookie['description']; ?></p>
            <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">

                <?php } ?>
                <section class="cookies container-fluid">
                    <div class="row">
                        TODO : Display shopping cart items from $_SESSION here.
                    </div>
                </section>


// Creation du panier

function creationPanier(){
if (!isset($_SESSION['panier'])){
$_SESSION['panier']=array();
$_SESSION['panier']['name'] = array();
$_SESSION['panier']['description'] = array();
$_SESSION['panier']['qteProduit'] = array();
$_SESSION['panier']['verrou'] = false;
}
return true;
}

//Creation ajout au panier

function ajouterArticle($libelleProduit,$qteProduit,$prixProduit){

//Si le panier existe
if (creationPanier() && !isVerrouille())
{
//Si le produit existe déjà on ajoute seulement la quantité
$positionProduit = array_search($libelleProduit,  $_SESSION['panier']['libelleProduit']);

if ($positionProduit !== false)
{
$_SESSION['panier']['qteProduit'][$positionProduit] += $qteProduit ;
}
else
{
//Sinon on ajoute le produit
array_push( $_SESSION['panier']['libelleProduit'],$libelleProduit);
array_push( $_SESSION['panier']['qteProduit'],$qteProduit);
array_push( $_SESSION['panier']['prixProduit'],$prixProduit);
}
}
else
echo "Un problème est survenu veuillez contacter l'administrateur du site.";
}