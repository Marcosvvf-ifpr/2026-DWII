<?php
/**
 * ===================================================================
 * Arquivo   : obrigado.php | (raiz do repositório 2026-DWII)
 * Diciplina : Desenvolvimento Web II (2026-DWII)
 * Aula      : 04 - PHP para Web: Formularios, Get e Post
 * Autor     : Marcos Vinicius Valério Ferreira
 * Conceitos : header() + exit(PRG), $_GET para parâmetros
 *             de confirmação, htmlspecialchars()
 * ===================================================================  
 */
if (session_status() === PHP_SESSION_NONE) session_start();

$nome = "Marcos Vinicius Valério Ferreira";
$pagina_atual = "contato";
$caminho_raiz = "./";
$titulo_pagina = "Mensagem Enviada | Portfólio DWII";

$nome_visitante = $_SESSION['contato_nome'] ?? null;

if ($nome_visitante === null) {
    header("Location: contato.php");
    exit();
}

unset($_SESSION['contato_nome']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include __DIR__ . '/includes/cabecalho.php' ?>
</head>
<body>
    <div class="container">
        <div class="alerta-sucesso">
            <h3>✅ Mensagem enviada com sucesso!</h3>
            <p>Obrigado, <strong><?php echo htmlspecialchars($nome_visitante); ?></strong>!</p>
            <p>Em breve entrarei em contato com você.</p>
        </div>

        <div style="margin-top: 20px; display: flex; gap: 12px:">
            <a href="index.php" class="botao">Voltar para Home</a>
            <a href="contato.php" class="botao">Enviar outra mensagem</a>
        </div>
    </div>
    <?php include __DIR__ . '/includes/rodape.php' ?>
</body>
</html>