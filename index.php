<?php
$host = 'db';
$db   = 'mon_atelier';
$user = 'user_atelier';
$pass = 'password_atelier';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
     $pdo = new PDO($dsn, $user, $pass);
     $stmt = $pdo->query('SELECT nom, email FROM utilisateurs');
     
     echo "<h1>Liste des utilisateurs</h1>";
     echo "<table border='1'>";
     while ($row = $stmt->fetch()) {
         echo "<tr><td>" . htmlspecialchars($row['nom']) . "</td><td>" . htmlspecialchars($row['email']) . "</td></tr>";
     }
     echo "</table>";
} catch (\PDOException $e) {
     echo "Erreur de connexion : " . $e->getMessage();
}
?>
