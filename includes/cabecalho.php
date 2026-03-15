<?php
/**
 * =============================================================
 * Arquivo   : cabecalho.php | includes/cabecalho.php
 * Diciplina : Desenvolvimento Web II (2026-DWII)
 * Aula      : 04 - PHP para Web: Formularios, Get e Post
 * Autor     : Marcos Vinicius Valério Ferreira
 * Conceitos : Modularização, include, isset(), caminho dinâmico
 *  =============================================================
 * 
 * Responsabilidade: gera <meta>, <title>, link para o CSS
 * externo e inclui o nav.php
 * 
 * Varriáveis esperadas na página que inclui este arquivo:
 *     $tirulo_pagina - string (opicional): texto da aba de navegador
 *     $caminho_raiz - string: caminho relativo até a raiz do projeto
 *           Ex: '../' para páginas em 01_php-intro/ ou
 *                    02_formularios/ (um nivel acima)
 */

// isset() - verifica se a variável foi definida antes de usá-la
// Valor padrão ativa caso a página esqueça de declarar $titulo_pagina
if (!isset($titulo_pagina)) $titulo_pagina = "Portifólio - DWII";
if (!isset($caminho_raiz)) $caminho_raiz = "../"; //padrão: umnivel acima
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($titulo_pagina); ?></title>

<!--
    <link> ponta para o CSS usando $caminho_raiz
    01_php-intro/index.php -> $caminho_raiz = '../ -> '../includes/style.css'
    02_formularios/contato.php -> igual: '../includes/style.css'
    Assim um único arquivo CSS serve a todas as pastas.
--> 
<link rel="stylesheet" href="<?php echo $caminho_raiz; ?>includes/style.css">

<?php 
// __DIR__ é um constante PHP que retorna o caminho absoluto
// do diretório onde esté arquivo está - garante qu o include
// funciona independente do onde a página que o chamou está.
include __DIR__ . '/nav.php';
?>