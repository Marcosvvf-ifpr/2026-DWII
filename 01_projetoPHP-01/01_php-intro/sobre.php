<!-- 01_php-intro/sobre -->$_COOKIE
<?php
    $nome = "Marcos Vinicius Valério Ferreira";
    $pagina_atual = "sobre";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - <?php echo $nome; ?></title>
</head>
<body style: "font-family: Arial, sans-serif; margin: 0; background: #f3f4f6">
    <!--includes/cabecalho.php -->
    <?php include 'includes/cabecalho.php'; ?>
    <div style="max-width: 800px; margin: 40px auto; padding: 0 20px;">
        <h1 style="color: #3b579d;">👤Sobre mim </h1>
        <p> Olá sou <strong><?php echo $name; ?></strong>, estudante de 
        Técnico de Informatica no IFPR de Ponta Grossa.</?>
        <p>Sou uma pessoa calma, atenciosa que gosta de
            ajudar os outros quando possivel, adoro torcer
            para o tricampeão paranaense OEFC e tambem de
            programar principalmente em: Java, Python, PHP 
            e lazarus. Atualmente tenho como obetivo 
            finalizar o curço e passar no PSS para engenharia 
            da Computação. 
            </p>
        <a href="index.php"
           style="color: #3b579d; fontweight: bold;"><-- Voltar ao inicio</a>
    </div>
    <!-- includes/rodape.php -->
    <?php include 'includes/rodape.php'; ?>
</body>
</html>