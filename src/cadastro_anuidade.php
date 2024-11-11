<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ano = $_POST['ano'];
    $valor = $_POST['valor'];

    if (empty($ano) || empty($valor)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $query = "INSERT INTO anuidades (ano, valor, associado_id) 
              SELECT ?, ?, id FROM associados";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $ano, $valor);

    if ($stmt->execute()) {
        echo "Anuidade cadastrada para todos os associados.";
    } else {
        echo "Erro ao cadastrar anuidade: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
