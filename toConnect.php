<?php

// Charger le fichier .env 
require 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Definition des constantes en utilisant les variables d'environnement
define('SERVER', $_ENV['DB_HOST']);
define('DBNAME', $_ENV['DB_NAME']);
define('USER', $_ENV['DB_USER']);
define('PASSWD', $_ENV['DB_PASSWORD']);

// Création du dns
$dns = "mysql:host=" . SERVER . ";dbname=" . DBNAME;

try {
    // Connexion à la base de données
    $pdo = new PDO($dns, USER, PASSWD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    // Gestion d'erreurs
    $msg = 'Erreur ' . $e->getFile() . ' ligne ' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
}

?>