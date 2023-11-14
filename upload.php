<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image']['name'])) {
    $uploadDir = 'uploads/'; // Diretório onde a imagem será armazenada

    // Verifica se o diretório de upload existe e cria-o, se necessário
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        $imageData = file_get_contents($uploadFile);
        $base64Image = base64_encode($imageData);

        // Exibe a imagem codificada em base64
        echo '<img src="data:image/jpeg;base64,' . $base64Image . '">';
        echo $base64Image;
    } else {
        echo 'O upload falhou.';
    }
}
?>
