<?php
/**
 * =============================================================
 * Arquivo   : nav.php | includes/nav.php
 * Diciplina : Desenvolvimento Web II (2026-DWII)
 * Aula      : 04 - PHP para Web: Formularios, Get e Post
 * Autor     : Marcos Vinicius Valério Ferreira
 * Conceitos : Modularização, date(), isset(), fallback defencivo
 * =============================================================
 */
$autor = isset($nome) ? htmlspecialchars($nome) : "Portifólio";
?>

<footer>
    <?php echo $autor; ?>
    &copy; <?php echo date("Y"); ?>
    | Desnvolvido com PHP
    | IFPR - Ponta Grossa
</footer>