<?php
include "index.php";
include "_db.php";

// ******************* add with input ***********************
if (isset($_POST['task'])) {
    $task = (strip_tags($_POST['task']));
    $maxOrder = $dbMtdl->prepare("SELECT MAX(order_task) AS max_order from task");
    $maxOrder -> execute ();

    $addList = $dbMtdl->prepare("INSERT INTO `task` (`task`, `order_task`) VALUES (:task, :maxOrder)");
    $addList->execute([
        ':task' => $task,
        ':maxOrder' => $maxOrder->fetchColumn() + 1
    ]);

    if ($addList->rowCount()) {
        $msg[] = 'tâche ajoutée';
    } else ($msg[] = 'impossible d\'ajouter la tâche');

    header('Location: index.php' );
};

// ******************************* remove Li *******************
if (isset($_GET['action']) && $_GET['action'] === 'remove') {
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
// ***************** up li ********************************
if (isset($_GET['action']) && $_GET['action'] === 'up') {
    $moveUp = $dbMtdl->prepare("SELECT order_task from task");
    $moveUp -> execute ();
    
    $id = intval(strip_tags($_GET['id']));
    $remove = $dbMtdl->prepare("    UPDATE task 
                                    SET order_task = order_task + 1 
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
// ******************************* down li **************************
if (isset($_GET['action']) && $_GET['action'] === 'down') {
    $moveUp = $dbMtdl->prepare("SELECT order_task from task");
    $moveUp -> execute ();
    
    $id = intval(strip_tags($_GET['id']));
    $remove = $dbMtdl->prepare("    UPDATE task 
                                    SET order_task = order_task - 1 
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

