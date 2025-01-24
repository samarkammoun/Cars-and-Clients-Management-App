<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une Voiture</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #0d6efd;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
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
        <div class="form-container">
            <h2 class="mb-4">Formulaire de Modification de Voiture</h2>
            <form method="post" action="ModifierVoiture.php?id_voiture=<?php echo $_GET['id_voiture']; ?>">
                <input type="hidden" name="id_voiture" value="<?php echo $_GET['id_voiture']; ?>">
                <div class="mb-3">
                    <label for="marque" class="form-label">Marque :</label>
                    <input type="text" class="form-control" id="marque" name="marque" required>
                </div>
                <div class="mb-3">
                    <label for="modele" class="form-label">Modèle :</label>
                    <input type="text" class="form-control" id="modele" name="modele" required>
                </div>
                <div class="mb-3">
                    <label for="cylindre" class="form-label">Cylindre :</label>
                    <input type="text" class="form-control" id="cylindre" name="cylindre" required>
                </div>
                <div class="mb-3">
                    <label for="dateA" class="form-label">Date d'achat :</label>
                    <input type="date" class="form-control" id="dateA" name="dateA" required>
                </div>
                <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                <a href="ModelAfficherVoitures.php" class="btn btn-primary">Retour</a>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
