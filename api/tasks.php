<?php
include 'config.php';

function createTask($title, $description) {
    global $conn;
    $title = pg_escape_string($title);
    $description = pg_escape_string($description);

    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    if (pg_query($conn, $sql) === FALSE) {
        echo "Erro na inserção: " . pg_last_error($conn);
    }
}

function readTasks() {
    global $conn;
    $tasks = [];

    $sql = "SELECT * FROM tasks";
    $result = pg_query($conn, $sql);

    if ($result === FALSE) {
        echo "Erro na consulta: " . pg_last_error($conn);
    } else {
        while ($row = pg_fetch_assoc($result)) {
            $tasks[] = $row;
        }
    }

    return $tasks;
}

function updateTask($id, $title, $description) {
    global $conn;
    $title = pg_escape_string($title);
    $description = pg_escape_string($description);

    $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
    if (pg_query($conn, $sql) === FALSE) {
        echo "Erro na atualização: " . pg_last_error($conn);
    }
}

function deleteTask($id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id=$id";
    if (pg_query($conn, $sql) === FALSE) {
        echo "Erro na exclusão: " . pg_last_error($conn);
    }
}

// Fechar a conexão ao final do script (opcional, dependendo do seu caso de uso)
pg_close($conn);
?>
