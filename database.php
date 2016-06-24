<?php
    $dsn = 'mysql:host=localhost;dbname=delgaudios';
    $username = 'dg_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>