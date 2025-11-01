<?php

require_once __DIR__ . "/../config/database.php";

function listarAtividades() {
    $pdo = getConnection();
    $sql = "SELECT * FROM atividades ORDER BY data_entrega ASC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function adicionarAtividade($titulo, $descricao, $materia, $data_entrega) {
    $pdo = getConnection();
    $sql = "INSERT INTO atividades (titulo, descricao, materia, data_entrega) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$titulo, $descricao, $materia, $data_entrega]);
}

function buscarAtividade($id) {
    $pdo = getConnection();
    $sql = "SELECT * FROM atividades WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function atualizarAtividade($id, $titulo, $descricao, $materia, $data_entrega) {
    $pdo = getConnection();
    $sql = "UPDATE atividades SET titulo = ?, descricao = ?, materia = ?, data_entrega = ? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$titulo, $descricao, $materia, $data_entrega, $id]);
}

function excluirAtividade($id) {
    $pdo = getConnection();
    $sql = "DELETE FROM atividades WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
?>
