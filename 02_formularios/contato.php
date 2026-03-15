<?php 
/**
 * ===================================================================
 * Arquivo: 02_formularios/contato.php
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 04 - PHP para Web: Formulários, GET e POST
 * Autor: Marcos Vinicius Valério Ferreira
 * Conceitos: formulário HTML, method GET, $_GET, htmlspecialchars()
 * ===================================================================
 */
$nome = "Marcos Vinicius Valério Ferreira";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Contato";

$nome_visitante = null;
$mensagem = null;
$erros = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome_visitante = trim($_POST["nome_visitante"] ?? "");
    $mensagem = trim($_POST["mensagem"] ?? "");

    if (empty($nome_visitante)) {
        $erros[] = "O campo 'Nome' é obrigatório.";
    }
    if (empty($mensagem)) {
        $erros[] = "A mensagem é obrigatório.";
    }
    elseif(strlen($mensagem) < 10) {
        $erros[] = "A mensagem deve conter pelo menos 10 caracteres.";
    }
}
?>
<?php include '../includes/cabecalho.php' ?>
<div class="container">
    <h1 class="titulo-secao">📬 Formulario de Contato</h1>
    <form class="form-container" action="contato.php" method="GET">
        <label>Seu nome:</label>
        <input type="text" name="nome_visitante" required>
        <label>Sua mensagem:</label>
        <textarea name="mensagem" rows="4"></textarea>
        <button type="submit">Enviar</button>
    </form>
    <?php if (empty($erros) && $_SERVER["REQUEST_METHOD"] === "POST") {
        header("Location: obrigado.php?nome=" . urlencode($nome_visitante));
        exit();
    }?>
    <!--
    <?php if (!empty($erros)): ?>
    <div class="alerta-erro">
        <h3>🚫 Corrija os erros:</h3>
        <?php foreach ($erros as $erro): ?>
            <p style="margin: 4px 0;">xml_parser_create_ns <?php echo htmlspecialchars($erro); ?></p>
        <?php endforeach; ?>
    </div>
    <?php endif; ?>
        -->
</div>

<?php if ($nome_visitante !== null): ?>
<div class="alerta-sucesso" style="margin-top: 20px;">
    <h3>✅ Dados recebidos!</h3>
    <p><strong>Nome:</strong>
    <?php echo htmlspecialchars($nome_visitante); ?></p>
    <p><strong>Mensagem:</strong>
    <?php echo htmlspecialchars($mensagem); ?></p>
</div>
<?php endif; ?>
<?php include '../includes/rodape.php' ?>