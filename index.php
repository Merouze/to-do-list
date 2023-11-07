<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My to-do</title>
</head>
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
?>

<body>
    <div>
        <h1>My To-Do</h1>
    </div>

    <form action="" method="get">
        <input type="text" name="name_product" id="name_field" placeholder="Add a task" required>
        <input type="submit" value="+">
    </form>
    <ul>
    <?php
    $query = $dbMtdl->prepare("SELECT task FROM task;");
    $query->execute();
    $result = $query->fetchAll();
    foreach ($result as $task) {
        echo '<li>' . $task['task'] . '</li>';
    }
    ?>
    </ul>

    <?php


    ?>

</body>

</html>