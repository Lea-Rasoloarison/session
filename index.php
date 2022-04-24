<?php require 'inc/data/products.php';
require 'inc/head.php';
include 'inc/data/products.php';

var_dump($_SESSION);

// Login et création du panier
if (isset($_SESSION["login"])){
    if (isset($_GET['add_to_cart'])){

        switch ($_GET['add_to_cart']) {
            case '46':
                if (!isset($_SESSION['cart']['id46'])){
                    $_SESSION['cart']['id46'] = ['name'=>'Pecan nuts', 'quantity'=>1 ];
                } else{
                    $_SESSION['cart']['id46']['quantity'] += 1 ;
                }
                break;

            case '36':
                if (!isset($_SESSION['cart']['id36'])){
                    $_SESSION['cart']['id36'] = ['name'=>'Chocolate chips', 'quantity'=>1 ];
                } else{
                    $_SESSION['cart']['id36']['quantity'] += 1 ;
                }
                break;

            case '58':
                if (!isset($_SESSION['cart']['id58'])){
                    $_SESSION['cart']['id58'] = ['name'=>'Full chocolate cookie', 'quantity'=>1 ];
                } else{
                    $_SESSION['cart']['id58']['quantity'] += 1 ;
                }
                break;

            case '32':
                if (!isset($_SESSION['cart']['id32'])){
                    $_SESSION['cart']['id32'] = ['name'=>'M&M\'s© cookie' , 'quantity'=>1 ];
                } else{
                    $_SESSION['cart']['id32']['quantity'] += 1 ;
                }
                break;
        }
        header('Location: /index.php');exit;
    }
}

?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
