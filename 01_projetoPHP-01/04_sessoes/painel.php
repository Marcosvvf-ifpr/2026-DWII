<?php
/**
 * Diciplina : Desenvolvimento Web II (DWII)
 * Aula      : 06 - Autenticação com sessoes e controle de acesso
 * Arquivo   : 04_sessoes/login.php
 * Autor     : Marcos Vinicius Valério
 * Data      : 23/03/2026
 */

/**session_start();

if(!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit;
}*/

require_once __DIR__ . '04_sessoes/includes/auth.php';
requer_login();

$titulo_pagina = 'Painel - Área Restrita';
$caminho_raiz = '../';
$pagina_atual = '';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require_once __DIR__ . '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <div class="alerta-sucesso">
            <h3>✅ Você está autenticado!</h3>
            <p><strong>Usuário:</strong>
                <?php echo htmlspecialchars($_SESSION['usuario']); ?>
            </p>
            <p><strong>Login Realizado em:</strong>
                <?php echo htmlspecialchars($_SESSION['logado_em'] ?? '-'); ?>
            </p>
        </div>
        <div class="card">
            <h3>📊Painel de controle</h3>
            <p>
                Este conteudo só é visível para usuários autenticados.
            </p>
            <a href="../05_crud/index.php" class="btn-primario">
                📂 Gerenciar Projetos
            </a>
        </div>
        <p style="margin-top: 24px; text-align: center;">
            <a href="logout.php" style="background: #cf1c21; color: white; padding:10px 24px; border-radius: 6px; text-decoration: none; font-weight: bold;">
                🚪Sair
            </a>
        </p>
    </div>
    <?php require_once __DIR__ . '../includes/rodape.php';?>
</body>
</html>