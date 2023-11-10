<?php
include "index.php";
// ***************** display li ********************************

// ******************************* remove Li *******************
if (isset($_GET['action']) && $_GET['action'] === 'valider') {
    $id = intval(strip_tags($_GET['id']));
    $remove = $dbMtdl->prepare("    UPDATE task 
                                    SET task_statut = 1 
                                    WHERE id_task = :id");
    $remove->execute([
        'id' => $id
    ]);

    if ($remove->rowCount()) {
        $msg[] = 'Tâche effectuée';
    } else {
        $msg[] = 'Impossible de supprimer la tâche';
    }
    
    header("Location: index.php" );
    exit;
}
// *********************************** Delete ********************
if (isset($_GET['action']) && $_GET['action'] === 'supp') {
    $id = intval(strip_tags($_GET['id']));
    $remove = $dbMtdl->prepare("    DELETE 
                                    FROM task 
                                    WHERE id_task = :id");
    $remove->execute([
        ':id' => $id

    ]);

    if ($remove->rowCount()) {
        $msg[] = 'Tâche effectuée';
    } else {
        $msg[] = 'Impossible de supprimer la tâche';
    }
    
    header("Location: index.php" );
    exit;
}
// ********************************* Move task *************************************
