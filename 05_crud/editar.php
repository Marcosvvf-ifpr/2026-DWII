<?php
/**
 * Diciplina : Desenvolvimento Web II (DWII)
 * Aula      : 08 - CRUD: Completo
 * Arquivo   : 05_crud/editar.php
 * Autor     : Marcos Vinicius Valério Ferreira
 * Data      : 06/04/2026
 * Descrição : Implementa o U do CRUD (Update).
 *             Este arquivo tem 3 responsabilidades:
 *            1. Validar o ID recebido via GET
 *            2. Exibir um formulário pré-preenchido com os dados atuais do projeto($_GET)
 *            3. Processar alterações e executar UPDATE ($_POST) 
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

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nome = trim($_POST['nome'] ?? '');
    $descricao = trim($_POST['descricao'] ?? '');
    $tecnologias = trim($_POST['tecnologias'] ?? '');
    $link_github = trim($_POST['link_github'] ?? '');
    $ano = (int) ($_POST['ano'] ?? date('Y'));

    if ($nome === null || $descricao === null || $tecnologias === null){
        $erro = 'Preencha todos os campos obrigatórios.';
    }
    if ($erro === ''){
        $sql = 'UPDATE projetos SET nome = :nome, descricao = :descricao, tecnologias = :tecnologias, link_github = :link_github, ano = :ano WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'descricao' => $descricao,
            'tecnologias' => $tecnologias,
            'link_github' => $link_github,
            'ano' => $ano,
            'id' => $id
        ]);
        header('Location: index.php?editado=ok');
        exit;
    }
    $projeto['nome'] = $nome;
    $projeto['descricao'] = $descricao;
    $projeto['tecnologias'] = $tecnologias;
    $projeto['link_github'] = $link_github;
    $projeto['ano'] = $ano;
}

$titulo_pagina = 'Editar Projeto - Portfólio';
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
        <h1 class="titulo-secao">✏️ Editar Projeto</h1>
        <?php if ($erro): ?>
            <div class="alerta-erro">
                <p style="margin: 0;">❌ <?php echo htmlspecialchars($erro); ?></p>
            </div>
        <?php endif; ?>
        <form action="editar.php?id=<?php echo $projeto['id']; ?>" method="post" class="formulario">
            <div class="campo">
                <label for="nome">Nome do Projeto *</label>
                <input type="text" id="nome" name="nome" value="<?php echo htmlspecialchars($projeto['nome']); ?>" required>
            </div>
            <div class="campo">
                <label for="descricao">Descrição *</label>
                <textarea id="descricao" name="descricao" required><?php echo htmlspecialchars($projeto['descricao']); ?></textarea>
            </div>
            <div class="campo">
                <label for="tecnologias">Tecnologias *</label>
                <input type="text" id="tecnologias" name="tecnologias" value="<?php echo htmlspecialchars($projeto['tecnologias']); ?>" required>
            </div>
            <div class="campo">
                <label for="link_github">Link do GitHub</label>
                <input type="url" id="link_github" name="link_github" value="<?php echo htmlspecialchars($projeto['link_github']); ?>">
            </div>
            <div class="campo">
                <label for="ano">Ano *</label>
                <input type="number" id="ano" name="ano" value="<?php echo $projeto['ano']; ?>" required>
            </div>
            <div style="display: flex; gap: 12px; margin-top: 8px;">
                <button type="submit" class="btn-primario">💾Salvar Alterações</button>
                <a href="index.php" class="btn-secundario">❌Cancelar</a>
        </form>
    </div>
    <?php require_once __DIR__ . '../includes/rodape.php'; ?>
</body>
</html>