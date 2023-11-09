/ *******************request update*****************
$remove = $dbMtdl->prepare("UPDATE task 
            SET task_satut = 0 WHERE id_task = :id;");
$remove->execute();
$remove = $query->fetchAll();
// ***********************request delete************