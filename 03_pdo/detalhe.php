<?php
$caminho_raiz = '../';
require_once '03_pdo/includes/conexao.php';

// Validação do ID
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id){
    header('Location: index.php');
    exit;
}

// Correção: Adicionado $ e ; no final
$stmt = $pdo->prepare('SELECT * FROM tecnologias WHERE id = :id'); 
// Correção: Aspas na chave 'id'
$stmt->execute(['id' => $id]);
$tec = $stmt->fetch();

if (!$tec){
    header('Location: index.php');
    exit;
}

$titulo_pagina = htmlspecialchars($tec['nome']) . " - Catálogo";
$pagina_atual = "catalogo";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php include '03_pdo/includes/cab_pdo.php'; ?>
    <title><?php echo $titulo_pagina; ?></title>
</head>
<body>
    <div class="container">
        <a href="index.php" style="color: #3b579d; font-weight: bold;"><- Voltar ao Catálogo</a>
        
        <div class="card" style="margin-top: 20px;">
            <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                <h1 style="color: #3b579d; margin: 0 0 8px; font-size: 24px;">
                    <?php echo htmlspecialchars($tec['nome']); ?>
                </h1>
                <span style="background: #e8edf5; color: #3b579d; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: bold; white-space: nowrap;">
                    <?php echo htmlspecialchars($tec['categoria']); ?>
                </span>
            </div>

            <p style="font-size: 16px; margin: 16px 0;">
                <?php echo htmlspecialchars($tec['descricao']); ?>
            </p>

            <table style="width: 100%; border-collapse: collapse; margin-top: 20px; font-size: 14px;">
                <tr style="background: #f3f4f6">
                    <td style="padding: 10px; border: 1px solid #e5e7eb; font-weight: bold; width: 160px;">ID</td>
                    <td style="padding: 10px; border: 1px solid #e5e7eb;">
                        <?php echo htmlspecialchars($tec['id']); ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php include '03_pdo/includes/rod_pdo.php'; ?>
</body>
</html>