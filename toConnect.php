<?php

/**
 * Load environment variables from a .env file.
 *
 * @param string $path Path to the .env file.
 */
function loadEnv($path) {
    // Check if the .env file exists
    if (!file_exists($path)) {
        throw new Exception('.env file not found');
    }

    // Read the .env file line by line
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }

        list($name, $value) = explode('=', $line, 2);

        $value = trim($value, " \t\n\r\0\x0B\"'");

        $_ENV[$name] = $value;
    }
}


loadEnv(__DIR__ . '/.env');

// Definition des constantes en utilisant les variables d'environnement
define('SERVER', $_ENV['DB_HOST']);
define('DBNAME', $_ENV['DB_NAME']);
define('USER', $_ENV['DB_USER']);
define('PASSWD', $_ENV['DB_PASSWORD']);

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
