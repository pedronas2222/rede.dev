<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_POST['action'])) {
    if ($_POST['action'] === 'add_to_cart') {
        $productId = $_POST['id'];
        $productQuantity = $_POST['quantity'];
        $productPrice = $_POST['price'];

        $item = [
            'id' => $productId,
            'quantity' => $productQuantity,
            'price' => $productPrice,
        ];

        array_push($_SESSION['cart'], $item);
    }
}
?>
