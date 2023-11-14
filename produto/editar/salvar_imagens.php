<?php
include "../../conf/dbConect.php";

// Recupera o ID do produto
$id = $_POST['id'];

// Prepara a instrução SQL para atualizar as imagens
$types = "";
$updateClauses = array();
$params = array();

for ($i = 1; $i <= 4; $i++) {
    $fieldName = "imagem" . $i;

    if (!empty($_FILES[$fieldName]["name"])) {
        // Verifica se o arquivo foi enviado
        $updateClauses[] = "$fieldName = ?";
        $types .= "s"; // Adiciona "s" para string
        $fileContent = file_get_contents($_FILES[$fieldName]["tmp_name"]);
        $base64Encoded = base64_encode($fileContent);
        $params[] = $base64Encoded;
    }
}

if (count($updateClauses) === 0) {
    echo "Nenhuma imagem enviada para atualização.";
} else {
    $sql = "UPDATE tab_produto SET ";
    $sql .= implode(", ", $updateClauses);
    $sql .= " WHERE Id = ?";

    $types .= "i"; // Adiciona "i" para o ID
    $params[] = $id;

    $stmt = $conn->prepare($sql);

    // Verifique se a preparação foi bem-sucedida
    if ($stmt === FALSE) {
        die("Erro na preparação da declaração SQL: " . $conn->error);
    }

    // Associe os parâmetros usando bind_param
    $stmt->bind_param($types, ...$params);

    // Execute a instrução SQL
    if ($stmt->execute()) {
        echo "Imagens atualizadas com sucesso!";
    } else {
        echo "Erro ao atualizar as imagens: " . $stmt->error;
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
}

$conn->close();
?>
