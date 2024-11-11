<?php
require 'conexao.php';

if (isset($_GET['associado_id'])) {
    $associado_id = $_GET['associado_id'];

    // Consultando a data de filiação e anuidades devidas
    $query = "SELECT a.ano, a.valor, a.pago
              FROM anuidades AS a
              JOIN associados AS assoc ON assoc.id = a.associado_id
              WHERE assoc.id = ? AND a.pago = 0 AND a.ano >= YEAR(assoc.data_filiacao)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $associado_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $total_due = 0;
    $anuidades = [];
    while ($row = $result->fetch_assoc()) {
        $anuidades[] = $row;
        $total_due += $row['valor'];
    }

    // Exibindo as anuidades devidas
    echo "<h3>Anuidades devidas:</h3>";
    foreach ($anuidades as $anuidade) {
        echo "Ano: {$anuidade['ano']} - Valor: R$ {$anuidade['valor']} - Pago: " . ($anuidade['pago'] ? "Sim" : "Não") . "<br>";
    }
    echo "<br><strong>Total Devido: R$ $total_due</strong>";

    $stmt->close();
} else {
    echo "Associado não encontrado.";
}

$conn->close();
?>
