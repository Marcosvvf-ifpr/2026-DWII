<?php
/**
 * =============================================================
 * Arquivo   : index.php | (raiz do repositório 2026-DWII)
 * Diciplina : Desenvolvimento Web II (2026-DWII)
 * Aula      : 04 - PHP para Web: Formularios, Get e Post
 * Autor     : Marcos Vinicius Valério Ferreira
 * Conceitos : Ponto de entrada, array associativo, foreach,
 *             date(), htmlspecialchars()
 *  =============================================================
 * 
 * Hub de navegação - exibido quando o servidor sobe na raiz:
 *      php -S localhost:8000
 * 
 * Por estar fora das subpastas, este arquivo Não usa os
 * includes compartilhados (cabecalho.php, nav.php, rodape.php) .
 * Cabeçalho, nav e rodapésão definidos inline aqui
 */

//---Variáveis de conteúdo---
$nome = "Marcos";
$subtitulo = "Repositório 2026 - Desenvolvimento Web II";

//---Catálogo de Aulas---
//array associativo: cada aula é um bloco [...] com suas chaves.
//Para adicionar novas aulas: copie um bloco e edite os valores.
$aulas = [
    [
        "numero"    => "00",
        "nome"      => "Apresentação Pessoal",
        "descricao" => "Página estatica com HTML e CSS - Foto de perfil e layout responsivo.",
        "link"      => "00_apresentação/index.html",
        "icone"     => "👨‍💻",
        "cor"       => "#6b7280",
        "conceitos" => "HTML semântico, CSS Flexbox, responsividade"
    ],
    [
        "numero"    => "03",
        "nome"      => "Portifólio Dinâmico com PHP",
        "descricao" => "Mini-site de portifólio com variáveis, includes e menu dinâmico",
        "link"      => "01_php-intro/index.php",
        "icone"     => "🐘",
        "cor"       => "#3b579d",
        "conceitos" => "Variáveis, echo, include, foreach, operador trnário"
    ],
    [
        "numero"    => "04",
        "nome"      => "Formulário de Contato",
        "descricao" => "Formulário com validação no servidor, produção XSS e padrão PRG",
        "link"      => "02_formularios/contato.php",
        "icone"     => "📫",
        "cor"       => "#3ba34a",
        "conceitos" => '$_POST, validação, htmlspecialchars(), header() + exit'
    ]
];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($subtitulo); ?></title>
    <!--
        index.php está na RAIZ (2026-DWII/).
        A pasta includes/ também está na raiz - mesmo nível.
        Por isso o caminho é direto: "includes/style.css"
        (sem "../" - esse prefixo só aparece nas subpastas).

        Esse <link> faz o navegador carregar o style.css como
        arquivo separado - sem nenhum CSS embutido aqui.
-->
</head>
<body>
<!-- Cabealho --- mesmo padrão visual das demais páginas -->
    <header>
        <h1><?php echo htmlspecialchars($nome); ?> 👨‍💻</h1>
        <p><?php echo htmlspecialchars($subtitulo); ?></p>
    </header>
    <div class="container">
        <!-- Introdução de uso - exibida ogo ao abrir o repositorio -->
        <div class="box-info" style="margin-top: 0;">
            <h3>▶ Como executar este repositorio</h3>
            <p>
                Suba o servidor PHP na <strong>raiz</strong> para acessar todas as aulas:
            </p>
            <div style="background: #010000; color: #a8e6a3; padding: 10px 16px; border-radius: 6px; margin-top: 10px; font-family: 'Courier New', 'monospace'; font-size: 13px; line-heigth: 1.8;">
                cd ~/workspaces/2026-DWII<br>php -S localhost:8000
            </div>
            <p style="font-size: 13px; color: #6b7280; margin-top: 8px;">
                Está pagina é o hub de navegação. Use os botões abaixo para acessar cada projeto.
            </p>
        </div>
        <!-- Listagem das aulas - foreach percorre o array $aulas -->
        <h2 class="secao">📁 Projetos por aula</h2>
        <?php foreach ($aulas as $aula): ?>
        <!--
            border-left-color dinâmica: cada aula tem sua cor definida no array.
            Isso evita criar uma classe CSS diferente para cada card.
        -->
        <div class="card-aula" style="color: <?php echo $aula['cor']; ?>";>
            <div class="icone"><?php echo $aula['icone'] ?></div>
            <div class="conteudo";>
                <span class="badge">Aula <?php echo htmlspecialchars($aula['numero']); ?></span>
                <h3 style="color: <?php echo htmlspecialchars($aula['cor']); ?>;">
                    <?php echo htmlspecialchars($aula['nome']); ?>
                </h3>
                <p><?php echo htmlspecialchars($aula['descricao']); ?></p>
                <span class="conceitos">
                    🔑 <?php echo htmlspecialchars($aula['conceitos']); ?>
                </span><br>
                <a href="<?php echo htmlspecialchars($aula['link']); ?>" class="btn" style="background: <?php echo htmlspecialchars($aula['cor']); ?>;">
                    ABRIR ->
                </a>
            </div>
        </div>
        <?php endforeach; ?>
        <!-- TIMESTAMP - demonstra date() - igual ao index.php do portifolio -->
         <p style="text-aling: right; font-size: 13px; color: #9ca3af; margin-top: 8px;">
            ⏱ Gerado em: <?php echo date("d/m/Y"); ?>
        </p>
    </div>
    <!-- Rodapé - mesmo padrão visual do rodape.php das subpastas -->
     <footer>
        <?php echo htmlspecialchars($nome); ?>
        & copy; <?php echo date("Y"); ?>
        | Desenvolvido com PHP | IFPR - Ponta Grossa
     </footer>
</body>
</html>