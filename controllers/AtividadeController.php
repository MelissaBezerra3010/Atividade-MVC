<?php
require_once __DIR__ . "/../models/atividadeModel.php";

function index() {
    $atividades = listarAtividades();
    require __DIR__ . "/../views/listarAtividades.php";
}

function form($id = null) {
    $atividade = null;
    if ($id) {
        $atividade = buscarAtividade($id);
    }
    require __DIR__ . "/../views/formAtividade.php";
}

function salvar() {
    if (!empty($_POST['titulo']) && !empty($_POST['descricao']) && !empty($_POST['materia']) && !empty($_POST['data_entrega'])) {
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $materia = $_POST['materia'];
        $data_entrega = $_POST['data_entrega'];

        if (!empty($_POST['id'])) {
            atualizarAtividade($_POST['id'], $titulo, $descricao, $materia, $data_entrega);
        } else {
            adicionarAtividade($titulo, $descricao, $materia, $data_entrega);
        }
    }
    header("Location: index.php");
    exit;
}

function deletar($id) {
    if ($id) {
        excluirAtividade($id);
    }
    header("Location: index.php");
    exit;
}
