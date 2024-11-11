<?php
$servername = "localhost";
$username = "root"; // Troque se necessário
$password = "";     // Troque se necessário
$dbname = "devs_do_rn";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>