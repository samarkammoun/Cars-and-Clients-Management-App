<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Voiture</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .alert-custom {
            background-color: #0d6efd;
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
    </style>
</head>
<body>
    <?php
    require "toConnect.php";
    if (isset($_REQUEST['modifier'])) {
        $id_voiture = $_REQUEST['id_voiture'];
        $id_voiture = trim($id_voiture, "'");

        // Validate fields
        $errors = [];
        if (empty($_REQUEST['marque'])) {
            $errors[] = "Le champ marque est vide.";
        } else {
            $marque = $_REQUEST['marque'];
        }

        if (empty($_REQUEST['modele'])) {
            $errors[] = "Le champ modele est vide.";
        } else {
            $modele = $_REQUEST['modele'];
        }

        if (empty($_REQUEST['cylindre'])) {
            $errors[] = "Le champ cylindre est vide.";
        } else {
            $cylindre = $_REQUEST['cylindre'];
        }

        if (empty($_REQUEST['dateA'])) {
            $errors[] = "Le champ dateAchat est vide.";
        } else {
            $dateA = $_REQUEST['dateA'];
        }

        if (empty($errors)) {
            // Update car in the database
            $insert = "UPDATE voiture SET marque = ?, Modele = ?, Cylindre = ?, dateAchat = ? WHERE immatriculation = ?";
            $result = $pdo->prepare($insert);
            $result->bindParam(1, $marque, PDO::PARAM_STR);
            $result->bindParam(2, $modele, PDO::PARAM_STR);
            $result->bindParam(3, $cylindre, PDO::PARAM_STR);
            $result->bindParam(4, $dateA, PDO::PARAM_STR);
            $result->bindParam(5, $id_voiture, PDO::PARAM_STR);

            if ($result->execute()) {
                echo '<div class="alert-custom">Voiture modifiée avec succès !</div>';
                echo '<a href="ModelAfficherVoitures.php" class="btn-custom">Retour à la liste des voitures</a>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Erreur lors de la modification de la voiture.</div>';
            }
        } else {
            // Display errors
            foreach ($errors as $error) {
                echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
            }
        }
    } else {
        header("Location: ModelAfficherVoitures.php");
        exit;
    }
    ?>
</body>
</html>
