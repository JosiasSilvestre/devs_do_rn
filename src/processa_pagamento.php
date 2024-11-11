<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['anuidade_id'])) {
    $anuidade_id = $_POST['anuidade_id'];

    $query = "UPDATE anuidades SET pago = 1 WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $anuidade_id);

    if ($stmt->execute()) {
        echo "Pagamento realizado com sucesso!";
    } else {
        echo "Erro ao processar pagamento: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Anuidade não encontrada.";
}

$conn->close();
?>
