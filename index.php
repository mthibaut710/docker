<?php
$host = 'db';
$dbname = 'testdb';
$user = 'user';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $stmt = $pdo->query("SELECT * FROM users");

    foreach ($stmt as $row) {
        echo $row['name'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
