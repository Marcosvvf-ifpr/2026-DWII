<?php
/**
 * =============================================================
 * Arquivo   : includes/nav.php
 * Diciplina : Desenvolvimento Web II (2026-DWII)
 * Aula      : 04 - PHP para Web: Formularios, Get e Post
 * Autor     : Marcos Vinicius Valério Ferreira
 * Conceitos : Menu dinâmico, operador ternário, $caminho_raiz
 *  =============================================================
 * Mesmo padrão do nav.php da aula 03, com dua melhorias:
 *   1. Links montados via $caminho_raiz -> funciona de qualquer pasta
 *   2. Classe CS "ativo" em vez de style inline _> CSS externo controla
 * 
 * Variáveis esperadas:
 *   $pagina_atual - string: identifica qual item destacar no menu
 *   $caminho_raiz - string: caminho relativo até a raiz
 */

// Valores padrão: evita erro se a página esquecer de declarar
if (!isset($pagina_atual)) $pagina_atual = "";
if (!isset($caminho_raiz)) $caminho_raiz = "../";

function menu_class($item, $atual) {
    return ($item === $atual) ? 'class="ativo"' : '';
}
?>

<nav>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
    <?php echo menu_class("inicio", $pagina_atual); ?>>
        🏠 Inicio
    </a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/index.php"
    <?php echo menu_class("sobre", $pagina_atual); ?>>
        👤 Sobre
    </a>
    <a href="<?php echo $caminho_raiz; ?>01_php-intro/projetos.php"
    <?php echo menu_class("projetos", $pagina_atual); ?>>
        🚀 Projetos

    </a>
    <a href="<?php echo $caminho_raiz; ?>02_formularios/contato.php"
    <?php echo menu_class("contato", $pagina_atual); ?>>
        📫 Contato
    </a>
</nav>