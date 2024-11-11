<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura e sanitiza os dados
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $cpf = trim($_POST['cpf']);
    $data_filiacao = trim($_POST['data_filiacao']);

    // Validação básica
    $errors = [];
    if (empty($nome)) $errors[] = "Nome é obrigatório.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "E-mail inválido.";
    if (empty($cpf) || !preg_match('/^\d{3}\.\d{3}\.\d{3}\-\d{2}$/', $cpf)) $errors[] = "CPF inválido.";
    if (empty($data_filiacao)) $errors[] = "Data de filiação é obrigatória.";

    if (empty($errors)) {
        try {
            // Prepara e executa a consulta de inserção
            $stmt = $conn->prepare("INSERT INTO associados (nome, email, cpf, data_filiacao) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nome, $email, $cpf, $data_filiacao]);
            
            echo "<div class='alert success'>Associado cadastrado com sucesso!</div>";
        } catch (PDOException $e) {
            echo "<div class='alert error'>Erro ao cadastrar: " . $e->getMessage() . "</div>";
        }
    } else {
        // Exibe os erros de validação
        foreach ($errors as $error) {
            echo "<div class='alert error'>{$error}</div>";
        }
    }
}
?>
