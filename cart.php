<?php
require 'inc/head.php';

// Si aucune session n'est active -> redirection vers login
if(!isset($_SESSION["login"])){
    if (isset($_SESSION['cart'])) {
        $test = $_SESSION['cart'];

        foreach ($test as $id) {
            echo $id['name'] . '<br>';
            echo $id['quantity'] . '<br>';
        }

    }
}else{
    header('Location: /login.php');
    exit;
}

require 'inc/foot.php'; ?>

<?php require 'inc/foot.php'; ?>