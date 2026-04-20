<!-- 
    Diciplina : Desenvolvimento Web II (DWII)
    Aula      : 05 - PHP + MariaDB: persistência de dados via PDO
    Autor     : Marcos Vinicius Valério Ferreira
    Data      : 16/03/2026
-->
<?php
$titulo_pagina = "Catalogo de Tecnologias";
$pagina_atual = "Catalogo";

require_once '03_pdo/includes/conexao.php';

$stmt = $pdo->query('select * from tecnologias order by name ASC');
$tecnologias = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
    <?php include '03_pdo/includes/cab_pdo.php'; ?>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <div class="container">
        <h1 class="titulo-secao">🗄️ Catalogo de Tecnologias</h1>
        <p style="color: #6b7280; margin-bottom: 20px;">
            <?php echo count($tecnologias); ?> tecnologia(s) cadastrada(s)
        </p>
        <?php foreach ($tecnologias as $tec): ?>
            <div class="card">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h3><?php echo htmlspecialchars($tec['nome']); ?></h3>
                    <span style="background: #e8edf5; color: #3b579d; padding: 3px 10px; border-radius: 20px; font-size: 13px;">
                        <?php echo htmlspecialchars($tec['categoria']); ?>
                    </span>
                </div>
                <p><?php echo htmlspecialchars($tec['descricao']); ?></p>
                <a href="color: #3b57d; font-size: 14px; font-weight: bold; display: inline-block; margin-top:10px;">
                    Ver Detalhes->
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php include '03_pdo/includes/rod_pdo.php'; ?>
</body>
</html>