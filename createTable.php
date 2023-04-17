<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=testphp', 'admin', 123456, [
        PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
    ]);
    $pdo->query("CREATE TABLE students (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        birthday DATE NOT NULL,
        age INT NOT NULL 
    )");
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Exception $e) {
    echo $e->getMessage();
}
