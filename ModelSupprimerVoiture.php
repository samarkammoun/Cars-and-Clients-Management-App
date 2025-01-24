<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une Voiture</title>

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
    require "ToConnect.php";

    if (isset($_REQUEST['id_voiture'])) {
        $id_voiture = $_REQUEST['id_voiture'];
        $id_voiture = trim($id_voiture, "'");

        // Delete car from the database
        $delete = "DELETE FROM voiture WHERE immatriculation = ?";
        $result = $pdo->prepare($delete);
        $result->bindParam(1, $id_voiture, PDO::PARAM_STR);

        if ($result->execute()) {
            echo '<div class="alert-custom">Voiture supprimée avec succès !</div>';
            echo '<a href="ModelAfficherVoitures.php" class="btn-custom">Retour à la liste des voitures</a>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Erreur lors de la suppression de la voiture.</div>';
        }
    } else {
        header("Location: ModelAfficherVoitures.php");
        exit;
    }
    ?>
</body>
</html>
