<?php
    require_once 'pdo.php';
    $data = ['name' => $_POST['name']];
    createNewData($data);
    header("Location: http://localhost/learn_php_pdo/category/index.php");
?>