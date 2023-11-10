<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['remove_task'])) {
    $id = intval($_POST['remove_task']);
    $remove = $dbMtdl->prepare("UPDATE task SET task_status = 1 WHERE id_task = :id");
    $remove->execute([
        'id' => $id
    ]);

    if ($remove->rowCount()) {
        $msg[] = 'Tâche effectuée';
    } else {
        $msg[] = 'Impossible de supprimer la tâche';
    }
    
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}
