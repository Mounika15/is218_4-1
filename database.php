<?php
    
    $dsn = 'mysql:host=sql1.njit.edu;dbname=mg577';
    $username = 'mg577';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
