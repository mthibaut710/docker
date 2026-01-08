<?php
// Paramètres de connexion à la base de données
$dsn = 'mysql:host=db;dbname=docker;charset=utf8';
$db_user = 'root';
$db_password = 'exemple';

try {
    // Création d'une instance PDO
    $dbh = new PDO($dsn, $db_user, $db_password);

    // Préparation et exécution de la requête SQL
    $sql = "SELECT `text` FROM `exo1`";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    // Récupération de tous les résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    foreach ($results as $row) {
        echo $row['text'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

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
