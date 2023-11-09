
<?php

session_start();
$_SESSION['myToken'] = md5(uniqid(mt_rand(), true));

try {
    $dbMtdl = new PDO(
        'mysql:host=localhost;dbname=todo_list;charset=utf8',
        'root'
    );
    $dbMtdl->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (Exception $e) {
    die('Unable to connect to the database.
    ' . $e->getMessage());
}
// ******************* add with input ***********************
if (isset($_POST['task'])) {
    $task = (strip_tags($_POST['task']));
    $addList = $dbMtdl->prepare("INSERT INTO `task` (`task`) VALUES (:task)");
    $addList->execute([
        'task' => $task
    ]);
    if ($addList->rowCount()) {
        $msg[] = 'tâche ajoutée';
    } else ($msg[] = 'impossible d\'ajouter la tâche');
    
};
// *******************request update*****************
// $remove = $dbMtdl->prepare("UPDATE task 
//             SET task_satut = 0 WHERE id_task = :id;");
// $remove->execute();
// $remove = $query->fetchAll();
// ***********************request delete************

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale= 1.0">
    <link rel="stylesheet" href="style.css">
    <title>My to-do</title>
</head>

<body><?php
        var_dump($_SESSION)
        ?>
    <main>
        <div class="title">
            <h1>My To-Do</h1>
        </div>
        <div>
            <form action="" method="POST">
                <input class="input-add" type="text" name="task" id="name_field" placeholder=" Add a task" required>
                <input type="hidden" name="token" value="<?= $_SESSION['myToken'] ?>">
                <input class="btn-add" type="submit" value="+">
            </form>
        </div>
        <div class="class-li">
            <ul>
                <?php
                // ***************** display li ********************************
                $query = $dbMtdl->prepare("SELECT task 
            FROM task WHERE task_statut = 0 ORDER BY date_create DESC;");

                $query->execute();

                $result = $query->fetchAll();
                foreach ($result as $task) {
                    echo '<div class="list">
                <li class="task"><a class="class-a" href="">
                <input class="checkbox" type="checkbox"> </checkbox>' . $task['task'] . '
                </a></li><div class="options">
                <a class="class-a" href=""><p class="edit">✏️</p></a>
                <a class="class-a" href=""><p class="hand_top">👍</p></a>
                <a class="class-a" href=""><p class="hand_bottom">👎</p></a>
                <a class="class-a" href=""><p class="delete">❌</p></a>
                </div>
                </div>';
                }

                // foreach ($result as $task) {
                //     echo '<div class="list">
                // <li class="task">
                // <input class="checkbox" type="checkbox"> </checkbox>' . $task['task'] . '
                // </li><div class="options">
                // <p class="edit">✏️</p>
                // <p class="hand_top">👍</p>
                // <p class="hand_bottom">👎</p>
                // <p class="delete">❌</p>
                // </div>
                // </div>';
                // }
                ?>
            </ul>
        </div>
        <?php
        ?>
    </main>
</body>

</html>
