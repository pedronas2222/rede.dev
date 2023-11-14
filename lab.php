<?php
// Função para adicionar um item ao carrinho
function addItemToCart($id, $quantity, $price, $description) {
    $cart = [];
    if (isset($_COOKIE['cart'])) {
        $cart = json_decode($_COOKIE['cart'], true);
    }

    // Verifique se o item já está no carrinho
    $itemExists = false;
    foreach ($cart as &$item) {
        if ($item['id'] == $id) {
            $item['quantity'] += $quantity;
            $itemExists = true;
            break;
        }
    }

    if (!$itemExists) {
        $item = [
            'id' => $id,
            'quantity' => $quantity,
            'price' => $price,
            'description' => $description,
        ];
        $cart[] = $item;
    }

    // Salvar o carrinho no cookie
    setcookie('cart', json_encode($cart), time() + 3600, '/'); // Armazenado por 1 hora
}

// Função para calcular o valor total de todos os itens no carrinho
function calculateTotal($cart) {
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['quantity'] * $item['price'];
    }
    return $total;
}

// Função para exibir o carrinho em uma tabela
function displayCart($cart) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Descrição</th><th>Quantidade</th><th>Preço Unitário</th><th>Subtotal</th></tr>";

    foreach ($cart as $item) {
        $subtotal = $item['quantity'] * $item['price'];
        echo "<tr><td>{$item['id']}</td>
        <td>{$item['description']}</td>
        <td>{$item['quantity']}</td>
        <td>R$ {$item['price']}</td>
        <td>R$${subtotal}</td></tr>";
    }

    $total = calculateTotal($cart);
    echo "<tr><td colspan='4'>Total:</td><td>R$ ${total}</td></tr>";
    echo "</table>";
}

if (isset($_POST['add_to_cart'])) {
    $productId = $_POST['id'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    addItemToCart($productId, $quantity, $price, $description);
}

$cart = [];
if (isset($_COOKIE['cart'])) {
    $cart = json_decode($_COOKIE['cart'], true);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Carrinho de Loja</title>
</head>
<body>
    <h1>Minha Loja</h1>
    <form method="post">
        <div class="product">
            <h2>Produto 1</h2>
            <p>Preço: R$10.00</p>
            <input type="number" name="quantity" value="1" min="1">
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="price" value="10.00">
            <input type="hidden" name="description" value="Descrição do Produto 1">
            <input type="submit" name="add_to_cart" value="Adicionar ao Carrinho">
        </div>
    </form>

    <h2>Carrinho de Compras</h2>
    <?php
    if (!empty($cart)) {
        displayCart($cart);
    } else {
        echo "Seu carrinho está vazio.";
    }
    ?>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizador de Imagens</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="gallery">
        <img src="images/caneca-1.png" alt="Imagem 1" class="thumbnail" onclick="openModal('image1.jpg')">
        <img src="images/caneca-1.png" alt="Imagem 2" class="thumbnail" onclick="openModal('image2.jpg')">
        <img src="images/caneca-1.png" alt="Imagem 3" class="thumbnail" onclick="openModal('image2.jpg')">
        <!-- Adicione mais imagens conforme necessário -->
    </div>

    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img src="" alt="" id="modalImage">
    </div>

    <script src="script.js"></script>
</body>
</html>
