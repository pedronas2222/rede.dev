<?php
include"conf/dbConect.php";

// Consulta SQL para listar os dados da tabela
$sql = "SELECT * FROM tab_produto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Descrição</th><th>Valor de Custo</th><th>Valor de Venda</th><th>Margem</th><th>SKU</th><th>Informação</th><th>Promoção</th><th>Valor da Promoção</th><th>Data de Cadastro</th><th>Imagem 1</th><th>Imagem 2</th><th>Imagem 3</th><th>Imagem 4</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Id"] . "</td>";
        echo "<td>" . $row["DescricaoProduto"] . "</td>";
        echo "<td>" . $row["ValorCusto"] . "</td>";
        echo "<td>" . $row["ValorVenda"] . "</td>";
        echo "<td>" . $row["Margem"] . "</td>";
        echo "<td>" . $row["Sku"] . "</td>";
        echo "<td>" . $row["Informacao"] . "</td>";
        echo "<td>" . ($row["Promocao"] ? "Sim" : "Não") . "</td>";
        echo "<td>" . $row["ValorPromocao"] . "</td>";
        echo "<td>" . $row["DataCadastro"] . "</td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["Imagem1"]) . "' /></td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["Imagem2"]) . "' /></td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["Imagem3"]) . "' /></td>";
        echo "<td><img src='data:image/jpeg;base64," . base64_encode($row["Imagem4"]) . "' /></td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "Nenhum dado encontrado na tabela.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
