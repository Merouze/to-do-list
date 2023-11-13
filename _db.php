<?php

try {
    $dbMtdl = new PDO(
        'mysql:host=localhost;dbname=todo_list;charset=utf8',
        'y1y1',
        'merouze'
    );
    $dbMtdl->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
} catch (Exception $e) {
    die('Unable to connect to the database.
    ' . $e->getMessage());
}