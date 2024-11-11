<?php
require 'conexao.php';

$query = "SELECT assoc.id, assoc.nome, 
                 SUM(CASE WHEN a.pago = 0 AND a.ano <= YEAR(CURDATE()) THEN 1 ELSE 0 END) AS em_atraso
          FROM associados AS assoc
          LEFT JOIN anuidades AS a ON assoc.id = a.associado_id
          GROUP BY assoc.id";

$result = $conn->query($query);

echo "<h3>Status dos Associados:</h3>";
while ($row = $result->fetch_assoc()) {
    $status = $row['em_atraso'] > 0 ? "Em Atraso" : "Em Dia";
    echo "Nome: {$row['nome']} - Status: $status<br>";
}

$conn->close();
?>
