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
$nome = "Marcos Vinicius Valério Ferreira";
$pagina_atual = "contato";
$caminho_raiz = "../";
$titulo_pagina = "Obrigado!";

$nome_visitante = htmlspecialchars($_GET["nome"] ?? "Visitante");
?>
<php inclde '../includes/cabecalho.php' ?>
<div class="container confirmacao">
    <p class="confirmacao-icone">✅</p>
    <h1 class="confirmacao-titulo">
        Obrigado, <?php echo $nome_visitante; ?>!
    </h1>
    <p class="confirmacao-texto">
        Sua mensagem foi recebida com sucesso. Em breve entraremos em contato.
    </p>
    <a href="contato.php" class="botao">Enviar nova mensagem</a>
</div>