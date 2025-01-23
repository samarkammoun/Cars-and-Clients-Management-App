<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Client</title>

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
    require "toConnectTp4.php";
    if (isset($_REQUEST['modifier'])) {
        $id_client = $_REQUEST['id_client'];
        $id_client = trim($id_client, "'");

        // validation des champs
        $errors = [];
        if (empty($_REQUEST['nom'])) {
            $errors[] = "Le champ nom est vide.";
        } else {
            $nom = $_REQUEST['nom'];
        }

        if (empty($_REQUEST['prenom'])) {
            $errors[] = "Le champ prenom est vide.";
        } else {
            $prenom = $_REQUEST['prenom'];
        }

        if (empty($_REQUEST['code'])) {
            $errors[] = "Le champ code est vide.";
        } else {
            $code = $_REQUEST['code'];
        }

        if (empty($_REQUEST['local'])) {
            $errors[] = "Le champ local est vide.";
        } else {
            $local = $_REQUEST['local'];
        }

        if (empty($_REQUEST['tel'])) {
            $errors[] = "Le champ tel est vide.";
        } else {
            $tel = $_REQUEST['tel'];
        }

        if (empty($_REQUEST['mail'])) {
            $errors[] = "Le champ mail est vide.";
        } else {
            $mail = $_REQUEST['mail'];
        }

        if (empty($errors)) {
            // Modifier le client dans la base de données
            $insert = "UPDATE client SET Nom = ?, Prenom = ?, CodePostal = ?, Localite = ?, Telephone = ?, Email = ? WHERE IdClient = ?";
            $result = $pdo->prepare($insert);
            $result->bindParam(1, $nom, PDO::PARAM_STR);
            $result->bindParam(2, $prenom, PDO::PARAM_STR);
            $result->bindParam(3, $code, PDO::PARAM_STR);
            $result->bindParam(4, $local, PDO::PARAM_STR);
            $result->bindParam(5, $tel, PDO::PARAM_STR);
            $result->bindParam(6, $mail, PDO::PARAM_STR);
            $result->bindParam(7, $id_client, PDO::PARAM_STR);

            if ($result->execute()) {
                echo '<div class="alert-custom">Client modifié avec succès !</div>';
                echo '<a href="affichageClients.php" class="btn-custom">Retour à la liste des clients</a>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Erreur lors de la modification du client.</div>';
            }
        } else {
           // Gestion d'erreurs
            foreach ($errors as $error) {
                echo '<div class="alert alert-warning" role="alert">' . $error . '</div>';
            }
        }
    } else {
        header("Location: affichageClients.php");
        exit;
    }
    ?>
</body>
</html>