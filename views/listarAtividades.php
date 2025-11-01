<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade MVC</title>
    <link rel="stylesheet" href="css/listarStyle.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="header-itens">
                <h1 id="title">O LEME</h1>
                <a class="btn" href="index.php?acao=form">+ Nova Atividade</a>
            </div>
        </div>
        <div id="linha"></div>

        <div id="main">
            <div id="main-text">
                <h1 id="title-main">Planeje suas atividades!</h1>
                <p id="paragrafo-main">O Leme é um espaço criado para ajudar você a manter o controle das suas
                    atividades de forma simples e organizada. Assim como o leme de um barco guia
                    o rumo da viagem, o nosso objetivo é ajudar você a conduzir melhor sua rotina
                    de estudos e entregas, mantendo o foco e a produtividade no caminho certo.</p>
            </div>
            <div id="linha-main"></div>

            <?php if (!empty($atividades)): ?>
                <table>
                    <tr>
                        <th>ATIVIDADE</th>
                        <th>DESCRIÇÃO</th>
                        <th>MATÉRIA</th>
                        <th>ENTREGA</th>
                        <th></th>
                    </tr>
                    <?php foreach ($atividades as $atividade): ?>
                        <tr>
                            <td><?= htmlspecialchars($atividade['titulo']) ?></td>
                            <td><?= htmlspecialchars($atividade['descricao']) ?></td>
                            <td><?= htmlspecialchars($atividade['materia']) ?></td>
                            <td id="entrega"><?= htmlspecialchars(date('d/m/Y', strtotime($atividade['data_entrega']))) ?></td>
                            <td>
                                <a class="actions-btn" href="index.php?acao=editar&id=<?= $atividade['id'] ?>">Editar</a>
                                <a class="actions-btn" id="excluir-btn" href="index.php?acao=deletar&id=<?= $atividade['id'] ?>"
                                    onclick="return confirm('Deseja realmente excluir esta atividade?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>Nenhuma atividade cadastrada ainda.</p>
            <?php endif; ?>
        </div>

        <div id="footer">
            <div id="footerCima">
                <div id="integrantes-div">
                    <p id="integrantes">Integrantes:</p>
                    <p style="font-size: 13px">Mariane Matioli Zambelli <br> Melissa Gabriela Cosmo da Silva Bezerra
                        <br> Rodriogo Yuuki Oie
                    </p>
                </div>
                <div id="leme">
                    <p id="lemep">O LEME</p>
                </div>
            </div>
            <div id="footerBaixo">
                <hr>
                <p id="escola">ETEC Taboão da Serra - SP</p>
            </div>
        </div>
    </div>
</body>

</html>