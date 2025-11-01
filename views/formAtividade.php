<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($atividade) ? "Editar Atividade" : "Nova Atividade" ?></title>
    <link rel="stylesheet" href="css/formStyle.css">
</head>
<body>

    <form action="index.php?acao=salvar" method="POST">
        <div id="titulo">
            <a class="btn-voltar" href="index.php"><</a>
        <h1><?= isset($atividade) ? "Editar Atividade" : "Nova Atividade" ?></h1>
        </div>
        <?php if (isset($atividade)): ?>
            <input type="hidden" name="id" value="<?= $atividade['id'] ?>">
        <?php endif; ?>

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $atividade['titulo'] ?? '' ?>" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="5" required><?= $atividade['descricao'] ?? '' ?></textarea>

        <label for="materia">Matéria:</label>
        <input type="text" name="materia" id="materia" value="<?= $atividade['materia'] ?? '' ?>" required>

        <label for="data_entrega">Data de Entrega:</label>
        <input type="date" name="data_entrega" id="data_entrega" value="<?= $atividade['data_entrega'] ?? '' ?>" required>

        <button type="submit"><?= isset($atividade) ? "Atualizar" : "Salvar" ?></button>
    </form>
</body>
</html>