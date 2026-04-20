<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$pagina_atual = "inicio";
$caminho_raiz = "./";
$titulo_pagina = "Portifólio - Marcos V.V. Ferreira";

$nome = "Marcos Vinicius Valério Ferreira";
$descricao = "Estudante do Ensino tecnico integrado ao esino Medio no IFPR(Instituto Federal do Paraná) Centro de Referencia Ponta Grossa. Realizei o ensino Fundamental em duas diferentes escolas o Fundamental I na escola Catarina Miro e o Fundamental II na escola estadual Prof. Julio Teodorico Atualmente estou no 3° periodo do ensino Medio!";
$email = "20241CTB0100038@estudantes.ifpr.edu.br";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include __DIR__ . '/includes/cabecalho.php'; ?>
</head>
<body>
    <header>
        <p>
            <h1>
                Marcos Vinicius Valério Ferreira
            </h1>
            IFPR - Centro de Referencia Ponta Grossa
        </p>
        <nav>
            links em breve...
        </nav>
        <br>
    </header>
    <br>
    <main>
        <br>
        <section>
            <p id="img">
                <img src="00_apresentacao/imgs/Marcos.png" height="250" alt="minha foto">
            </p>
        </section>
        <aside>
            <p>
                <h2>Olá, sou o Marcos V.V. Ferreira!</h2>
                Estudante do Ensino tecnico integrado ao esino Medio no<br>
                IFPR(Instituto Federal do Paraná) Centro de Referencia <br>
                Ponta Grossa. Realizei o ensino Fundamental em duas    <br>
                diferentes escolas o Fundamental I na escola Catarina  <br>
                Miro e o Fundamental II na escola estadual Prof. Julio <br>
                Teodorico Atualmente estou no 3° periodo do ensino     <br>
                Medio!
            </p>
            <p>
                <h3>
                    🏫 IFPR - Instituto Federal do Paraná CRPG
                </h3>
                <h3>
                    📒 Desenvolvimento Web II - 2026
                </h3>
                <h3>
                    ✉️ 20241CTB0100038@estudantes.ifpr.edu.br
                </h3>
            </p>
            <br>
        </aside>
    </main>
    <?php include __DIR__ . '/includes/rodape.php'; ?>
</body>
</html>