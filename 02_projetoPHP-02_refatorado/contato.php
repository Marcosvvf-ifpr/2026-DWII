<?php 
/**
 * ===================================================================
 * Arquivo: contato.php
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 - PHP para Web: Formulários, GET e POST
 * Autor: Marcos Vinicius Valério Ferreira
 * Conceitos: formulário HTML, method GET, $_GET, htmlspecialchars()
 * ===================================================================
 */
if (session_status() === PHP_SESSION_NONE) session_start();

$pagina_atual = "contato";
$caminho_raiz = "./";
$titulo_pagina = "Contato | Portfólio DWII";

$nome_visitante = null;
$mensagem = null;
$erros = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_visitante = trim($_POST["nome_visitante"] ?? "");
    $mensagem = trim($_POST["mensagem"] ?? "");

    if (empty($nome_visitante)) {
        $erros[] = "O campo 'Nome' é obrigatório.";
    }elseif (strlen($nome_visitante) < 3) {
        $erros[] = "O nome deve conter pelo menos 3 caracteres.";
    }

    if (empty($email)) {
        $erros[] = "O campo 'E-mail' é obrigatório.";
    }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erros[] = "O E-mail fornecido é inválido, informe um E-mail válido(ex: nome@email.com).";
    }

    if (empty($mensagem)) {
        $erros[] = "A mensagem é obrigatório.";
    }elseif (strlen($mensagem) > 500) {
        $erros[] = "A mensagem deve conter no máximo 500 caracteres.";
    }elseif(strlen($mensagem) < 10) {
        $erros[] = "A mensagem deve conter pelo menos 10 caracteres.";
    }

    if (empty($erros)) {
        $_SESSION['contato_nome'] = $nome_visitante;
        header("Location: obrigado.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '../includes/cabecalho.php' ?>
</head>
<body>
    
<div class="container">
    <h1 class="titulo-secao">📬 Entre em Contato</h1>

    <?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3>⚠ Corrija os erros:</h3>
        <ul style="margin: 6px 0 0; padding-left: 20px;">
            <?php foreach ($erros as $erro): ?>
                <li style="margin: 4px 0;"><?php echo htmlspecialchars($erro); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <div class="form-container">
        <form class="formulario" method="post" action="contato.php">
            <div class="campo">
                <label class="label-campo" for="nome_visitante">Nome *</label>
                <input class="input-texto" type="text" id="nome_visitante" name="nome_visitante" placeholder="Seu nome completo" value="<?php echo htmlspecialchars($nome_visitante); ?>">
            </div>

            <div class="campo">
                <label class="label-campo" for="email">E-mail *</label>
                <input class="input-texto" type="email" id="email" name="email" placeholder="Seu@email.com" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <div class="campo">
                <label class="label-campo" for="mensagem">Mensagem *
                    <span style="color: #6b7280; font-weight: normal; font-size: 13px;">(mín. 10, max. 500 caracteres)</span>
                </label>
                <textarea class="input-texto" id="mensagem" name="mensagem" rows="5" placeholder="Sua mensagem aqui..." maxlength="500"><?php echo htmlspecialchars($mensagem); ?></textarea>
            </div>

            <button type="submit" class="btn-primario" style="width: 100%;">Enviar Mensagem ✉</button>
        </form>
    </div>
    <form class="form-container" action="contato.php" method="GET">
        <label>Seu nome:</label>
        <input type="text" name="nome_visitante" required>
        <label>Sua mensagem:</label>
        <textarea name="mensagem" rows="4"></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>
<?php include '../includes/rodape.php' ?>
</body>
</html>