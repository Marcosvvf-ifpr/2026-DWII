<?php
/**
 * =====================================================
 * Arquivo: 03_pdo/includes/cab.php
 * Diciplina: Desenvolvimento Web II (2026-DWII)
 * Aula: 05 - PHP + MariaDB: persistência de dados via PDO
 * =====================================================
 * 
 * Proxy local que reutiliza o cabecalho.php global da raiz
*/

if (!isset($titulo_pagina)) $titulo_pagina = "Catálogo de Tecnologias";
if (!isset($pagina_atual)) $pagina_atual = null;

$caminho_raiz = "../";

include __DIR__ . '/../../includes/cabecalho.php';
?>