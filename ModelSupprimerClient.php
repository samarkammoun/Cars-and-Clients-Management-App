<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un Client</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .alert-custom {
            background-color: #dc3545; /* Red color for deletion alert */
            color: white;
            border-radius: 8px;
            padding: 15px;
            margin: 20px auto;
            max-width: 600px;
            text-align: center;
        }

        .btn-custom {
            background-color: #0d6efd;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            display: block;
            margin: 20px auto;
            text-align: center;
            width: fit-content;
        }

        .btn-custom:hover {
            background-color: #0b5ed7;
            color: white;
        }

        a {
            color: white;
            text-decoration: none;
        }

        a:hover {
            color: lightgray;
        }
    </style>
</head>
<body>
    <?php
    require "ToConnectTp4.php";

    if (isset($_REQUEST['id_client'])) {
        $id_client = $_REQUEST['id_client'];
        $id_client = trim($id_client, "'");

        // Delete client from the database
        $delete = "DELETE FROM client WHERE IdClient = ?";
        $result = $pdo->prepare($delete);
        $result->bindParam(1, $id_client, PDO::PARAM_STR);

        if ($result->execute()) {
            echo '<div class="alert-custom">Client supprimé avec succès !</div>';
            echo '<a href="AffichageClients.php" class="btn-custom">Retour à la liste des clients</a>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Erreur lors de la suppression du client.</div>';
        }
    } else {
        header("Location: AffichageClients.php");
        exit;
    }
    ?>
</body>
</html>