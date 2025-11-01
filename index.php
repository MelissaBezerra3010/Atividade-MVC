<?php
require_once __DIR__ . "/controllers/AtividadeController.php";

$acao = $_GET['acao'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($acao) {
    case 'index':
        index();
        break;

    case 'form':
        form($id);
        break;

    case 'salvar':
        salvar();
        break;

    case 'editar':
        form($id);
        break;

    case 'deletar':
        deletar($id);
        break;

    default:
        echo "Ação não encontrada!";
        break;
}
