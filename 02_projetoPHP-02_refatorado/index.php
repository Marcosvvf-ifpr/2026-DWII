<?php
/**
 * ════════════════════════════════════════════════════════════
 * Disciplina : Desenvolvimento Web II (DWII)
 * Projeto    : Portfólio Pessoal — versão refatorada
 * Arquivo    : index.php  (homepage do portfólio)
 * Autor      : Marcos Vinicius Valério Ferreira
 * Data       : 27/04/2026
 * ════════════════════════════════════════════════════════════
 */
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
<html lang="pt-BR">
<head>
  <?php
  /*
   * include injeta o conteúdo de cabecalho.php aqui dentro.
   * Ele gera: <meta>, <title>, <link rel="stylesheet"> e o <nav>.
   * __DIR__ garante o caminho correto independente de onde este
   * arquivo está sendo executado.
   */
  include __DIR__ . '/includes/cabecalho.php';
  ?>
</head>
<body>
  <main>
    <section class="apresentacao">

      <div class="foto-container">
        <img
          src="<?php echo $caminho_raiz; ?>includes/imgs/Marcos.ppg"
          alt="Foto de <?php echo htmlspecialchars($nome); ?>"
          class="foto-perfil">
      </div>

      <div class="texto-container">

        <h2>
          Olá, eu sou <?php echo htmlspecialchars($nome); ?>! 👋
        </h2>

        <p><?php echo htmlspecialchars($descricao); ?></p>

        <div class="info-cards">

          <div class="info-card">
            <span class="card-icon">🎓</span>
            <span class="card-texto">Técnico em Informática — IFPR CRPG</span>
          </div>

          <div class="info-card">
            <span class="card-icon">💻</span>
            <span class="card-texto">Desenvolvimento Web II — 2026</span>
          </div>

          <div class="info-card">
            <span class="card-icon">📧</span>
            <span class="card-texto">
              <?php echo htmlspecialchars($email); ?>
            </span>
          </div>

        </div>
      </div>

    </section>
  </main>

  <?php include __DIR__ . '/includes/rodape.php'; ?>

</body>
</html>