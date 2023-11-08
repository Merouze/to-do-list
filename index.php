<<<<<<< HEAD
=======
Aurélien
  11 h 08
>>>>>>> master
<?php
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
<<<<<<< HEAD
// ***************** display li ********************************
$query = $dbMtdl->prepare("SELECT task FROM task;");
$query->execute();
$result = $query->fetchAll();
// ******************* add with input ***********************
if(isset($_POST['task'])) {
$task = (strip_tags($_POST['task']));
$addList = $dbMtdl->prepare("INSERT INTO `task` (`task`) VALUES (:task)");
$addList->execute([
    'task' => $task
]);
if ($addList->rowCount()) {
    $msg[] = 'tâche ajoutée';
}
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My to-do</title>
</head>
<body>
    <div>
        <h1>My To-Do</h1>
    </div>
    <form action="" method="POST">
        <input type="text" name="task" id="name_field" placeholder="Add a task" required>
        <input type="submit" value="+">
    </form>
    <ul>
        <?php
        foreach ($result as $task) {
            echo '  <div class="list">
           
            <li class="task">
                <input class="checkbox" type="checkbox"> </checkbox>' . $task['task'] . '
            </li>
            <div class="options">
                <p class="edit">✏️</p>
                <p class="hand_top">👍</p>
                <p class="hand_bottom">👎</p>
                <p class="delete">❌</p>
            </div>
        </div>';
=======
// ******************* add with input ***********************
if(isset($_POST['task'])) {
    $task = (strip_tags($_POST['task']));
    $addList = $dbMtdl->prepare("INSERT INTO `task` (`task`) VALUES (:task)");
    $addList->execute([
        'task' => $task
    ]);
    if ($addList->rowCount()) {
        $msg[] = 'tâche ajoutée';
    }};
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=
        , initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>My to-do</title>
    </head>
    <body>
        <div>
            <h1>My To-Do</h1>
        </div>
        <form action="" method="POST">
            <input type="text" name="task" id="name_field" placeholder="Add a task" required value="">
            <input type="submit" value="+">
        </form>
        <ul>
            <?php
            // ***************** display li ********************************
            $query = $dbMtdl->prepare("SELECT task FROM task ORDER BY date_create DESC;");
            $query->execute();
            $result = $query->fetchAll();
        foreach ($result as $task) {
            echo '<div><li><input type="checkbox" name="" id="">' . $task['task'] . '</li></div>';
>>>>>>> master
        }
        ?>
    </ul>
    <?php
    ?>
</body>
</html>