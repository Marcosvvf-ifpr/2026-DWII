<?php
/**
 * Diciplina : Desenvolvimento Web II (DWII)
 * Aula      : 08 - CRUD: Completo
 * Arquivo   : 05_crud/excluir.php
 * Autor     : Marcos Vinicius Valério Ferreira
 * Data      : 06/04/2026
 * Descrição : Implementação do D do CRUD(Delete).
 *             Este arquivo tem 3 responsabilidades:
 *            1. Validar o ID recebido via GET
 *            2. Exibir confirmação de exclusão
 *            3. Processar exclusão e executar DELETE ($_POST)
 */
require_once __DIR__ . '../04_sessoes/includes/auth.php';
requer_login();
require_once __DIR__ . '/includes/conexao.php';

$id = (int) ($_GET['id'] ?? 0);
if ($id <= 0) {
    header('Location: index.php?erro=id_invalido');
    exit;
}

$pdo = conectar();
$stmt = $pdo->prepare('SELECT * FROM projetos WHERE id = :id');
$stmt->execute(['id' => $id]);
$projeto = $stmt->fetch();

if (!$projeto) {
    header('Location: index.php?erro=nao_encontrado');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare('DELETE FROM projetos WHERE id = :id');
    $stmt->execute(['id' => $id]);
    header('Location: index.php?excluido=ok');
    exit;
}

$titulo_pagina = 'Excluir Projeto - Portfólio';
$caminho_raiz = '../';
$pagina_atual = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once __DIR__ . '../includes/cabecalho.php'; ?>
</head>
<body>
    <div class="container">
        <h1 class="titulo-secao">🗑️ Confirmar Exclusão</h1>
        <div class="card" style="max-width: 480px;">
            <p style="font-size: 16px; margin: 0 0 8px;">
                Tem certeza que deseja excluir o projeto <strong><?php echo htmlspecialchars($projeto['nome']); ?></strong>?
            </p>
            <p style="font-size: 18px; font-weight: bold; color: #cf1c21; margin: 0 0 20px;">
                Esta ação <strong>não pode ser desfeita</strong>!
            </p>
            <form action="excluir.php?id=<?php echo $id; ?>" method="post">
                <div style="display: flex; gap: 12px;">
                    <button type="submit" class="btn-perigo" style="flex: 1;">🗑️ Sim, excluir</button>
                    <a href="index.php" class="btn-secundario" style="flex: 1; text-align: center;">❌ Não, cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <?php require_once __DIR__ . '../includes/rodape.php'; ?>
</body>
</html>