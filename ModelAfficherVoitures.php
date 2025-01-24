<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Voitures</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .table-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .table thead {
            background-color: #0d6efd;
            color: white;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
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

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Gestion de Location de Voitures</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ModelAfficherVoitures.php">Voitures</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ModelAfficherClients.php">Clients</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container my-5">
        <div class="table-container">
            <h2 class="mb-4">Liste des Voitures</h2>
            <?php
            require "ToConnect.php";

            $sql = "SELECT * FROM voiture";
            $voiture = $pdo->query($sql);

            if (!$voiture) {
                echo "<div class='alert alert-danger'>Problème d'accès à la table Voiture :(</div>";
            } else {
                echo '
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Immatriculation</th>
                            <th>Marque</th>
                            <th>Modèle</th>
                            <th>Cylindre</th>
                            <th>Date Achat</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>';

                $voitures = $voiture->fetchAll();
                foreach ($voitures as $row) {
                    echo '
                    <tr>
                        <td>' . $row['immatriculation'] . '</td>
                        <td>' . $row['marque'] . '</td>
                        <td>' . $row['Modele'] . '</td>
                        <td>' . $row['Cylindre'] . '</td>
                        <td>' . $row['dateAchat'] . '</td>
                        <td><a href="FormulaireModifierVoiture.php?id_voiture=' . $row['immatriculation'] . '" class="btn btn-primary">Modifier</a></td>
                        <td><a href="ModelSupprimerVoiture.php?id_voiture=' . $row['immatriculation'] . '" class="btn btn-danger">Supprimer</a></td>
                    </tr>';
                }

                echo '
                    </tbody>
                </table>';
            }
            ?>
        </div>

     
        <div class="d-grid gap-3 col-md-6 mx-auto mt-4">
            <a href="PageAccueil.php" class="btn btn-primary">Retour au Menu</a>
            <a href="FormulaireAjouterVoiture.php" class="btn btn-primary">Ajouter Une Voiture</a>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
