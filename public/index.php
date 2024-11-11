<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Devs do RN</title>
    <link rel="stylesheet" href="../public/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="dashboard-container">
        <!-- Barra de Navegação Lateral -->
        <nav class="sidebar">
            <h2>Devs do RN</h2>
            <ul>
                <li><a href="../views/cadastro_associado.html"><i class="fas fa-user-plus"></i> Cadastrar Associado</a></li>
                <li><a href="../views/cadastro_anuidade.html"><i class="fas fa-calendar-alt"></i> Cadastrar Anuidade</a></li>
                <li><a href="../src/cobranca.php?associado_id=[ID_ASSOCIADO]"><i class="fas fa-file-invoice-dollar"></i> Consultar Anuidades</a></li>
                <li><a href="../views/pagamento.html"><i class="fas fa-credit-card"></i> Pagamento de Anuidades</a></li>
                <li><a href="../src/status_associados.php"><i class="fas fa-check-circle"></i> Status dos Associados</a></li>
            </ul>
        </nav>

        <!-- Área de Conteúdo Principal -->
        <main class="main-content">
            <header>
                <h1>Dashboard</h1>
                <p>Bem-vindo ao sistema de gestão dos associados da Devs do RN.</p>
            </header>

            <section class="info-cards">
                <div class="card">
                    <i class="fas fa-users"></i>
                    <div>
                        <h3>Associados</h3>
                        <p>Gerencie e visualize os associados cadastrados.</p>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-calendar"></i>
                    <div>
                        <h3>Anuidades</h3>
                        <p>Adicione e consulte as anuidades dos associados.</p>
                    </div>
                </div>
                <div class="card">
                    <i class="fas fa-credit-card"></i>
                    <div>
                        <h3>Pagamentos</h3>
                        <p>Veja e registre os pagamentos realizados.</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
