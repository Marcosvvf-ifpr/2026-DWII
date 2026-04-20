<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : includes/rodape.php
 * Autor      : Marcos Vinícius Valério Ferreira
 * Data       : 13/04/2026
 * Descrição  : Rodapé global do projeto.
 *              Exibe o nome do autor e o ano atual (gerado
 *              dinamicamente por date()). Se $nome não estiver
 *              definida na página, usa 'Portfólio' como fallback.
 * ════════════════════════════════════════════════════════════
 */
$autor = isset($nome) ? htmlspecialchars($nome) : "Portifólio";
?>

<footer>
    <?php echo $autor; ?>
    &copy; <?php echo date("Y"); ?>
    | Desnvolvido com PHP
    | IFPR - Ponta Grossa
</footer>