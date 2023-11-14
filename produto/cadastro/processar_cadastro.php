<?php

// Configurações de conexão com o banco de dados
include"dbConect.php";


// Recupera os dados do formulário
$descricao = $_POST['descricao'];
$valor_custo = $_POST['valor_custo'];
$valor_venda = $_POST['valor_venda'];
$margem = $_POST['margem'];
$sku = $_POST['sku'];
$informacao = $_POST['informacao'];
$promocao = isset($_POST['promocao']) ? 1 : 0;
$valor_promocao = $_POST['valor_promocao'];
$data_cadastro = date('Y-m-d');
$data_alteracao = date('Y-m-d');

// Realiza o upload das imagens
$imagem1 = file_get_contents($_FILES['imagem1']['tmp_name']);
$imagem2 = file_get_contents($_FILES['imagem2']['tmp_name']);
$imagem3 = file_get_contents($_FILES['imagem3']['tmp_name']);
$imagem4 = file_get_contents($_FILES['imagem4']['tmp_name']);

// Prepara a instrução SQL para inserir os dados
$sql = "INSERT INTO tab_produto (DescricaoProduto, ValorCusto, ValorVenda, Margem, Sku, Informacao, Promocao, ValorPromocao, DataCadastro, DataAlteracao, Imagem1, Imagem2, Imagem3, Imagem4) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

// Verifique se a preparação foi bem-sucedida
if ($stmt === FALSE) {
    die("Erro na preparação da declaração SQL: " . $conn->error);
}

$stmt->bind_param("sdddsssdssssss", 
    $descricao, 
    $valor_custo, 
    $valor_venda, 
    $margem, 
    $sku, 
    $informacao, 
    $promocao, 
    $valor_promocao, 
    $data_cadastro, 
    $data_alteracao, 
    $imagem1, 
    $imagem2, 
    $imagem3, 
    $imagem4);


// Executa a instrução SQL
if ($stmt->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o produto: " . $stmt->error;
}

// Fecha a conexão com o banco de dados
$stmt->close();
$conn->close();

?>
