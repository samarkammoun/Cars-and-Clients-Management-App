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
            <h2 class="mb-4">Formulaire de Modification de Client</h2>
            <form method="post" action="FormulaireModifierClient.php?id_client=<?php echo $_GET['id_client']; ?>">
                <input type="hidden" name="id_client" value="<?php echo $_GET['id_client']; ?>">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom :</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="mb-3">
                    <label for="code" class="form-label">Code Postal :</label>
                    <input type="text" class="form-control" id="code" name="code" required>
                </div>
                <div class="mb-3">
                    <label for="local" class="form-label">Localité :</label>
                    <input type="text" class="form-control" id="local" name="local" required>
                </div>
                <div class="mb-3">
                    <label for="tel" class="form-label">Téléphone :</label>
                    <input type="text" class="form-control" id="tel" name="tel" required>
                </div>
                <div class="mb-3">
                    <label for="mail" class="form-label">Email :</label>
                    <input type="email" class="form-control" id="mail" name="mail" required>
                </div>
                <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                <a href="ModelAfficherClients.php" class="btn btn-primary">Retour</a>
            </form>
        </div>
    </div>



   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
