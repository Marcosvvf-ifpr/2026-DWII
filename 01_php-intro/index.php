<!-- 01_php-intro/index.php -->
<!--
    Diciplina   : Desenvolvimento Web II (DWII)
    Aula        : 03 - Arquitetura Web e Introdução ao PHP
    Autor       : Marcos Vinicius Valério Ferreira
    Data        : 02/03/2026
    Repositorio : https://github.com/Marcosvvf-ifpr/2026-DWII
-->
<?php
// Variáveis PHP - serão usadas no HTML abaixo
$nome = "Marcos";
$profissao = "Estudante de Tecnologia";
$curso = "Técnico em Informatica - IFPR";
$ano = "2026";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio - <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--includes/cabecalho.php -->
    <?php include 'includes/cabecalho.php'; ?>
    <div class="hero">
        <h1><?php echo $nome; ?></h1>
        <p><?php echo $profissao; ?> | <?php echo $curso; ?></p>
    </div>
    <div class="conteiner">
        <h2>Bem-vindo ao meu portifólio</h2>
        <p>Está página foi gerada pelo php em:
            <strong><?php echo date("d/m/y \à\s H:i:s"); ?></strong></p>
    </div>
    <!-- includes/rodape.php -->
    <?php include 'includes/rodape.php'; ?>
</body>
</html>