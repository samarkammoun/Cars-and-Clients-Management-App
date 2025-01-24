<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Location de Voitures</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .hero-section {
            background: url('https://via.placeholder.com/1500x600') no-repeat center center/cover;
            color: white;
            padding: 100px 0;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-section p {
            font-size: 1.25rem;
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
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

    <div class="hero-section text-center">
        <div class="container">
            <h1 class="mb-4">Bienvenue dans notre base de location de voitures</h1>
            <p class="mb-5">Gérez vos voitures et clients de manière efficace et rapide.</p>
        </div>
    </div>

    
    <div class="container cards-container my-5">
        <div class="row justify-content-center">
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title">Voitures</h5>
                        <p class="card-text">Gérez votre parc automobile.</p>
                        <a href="ModelAfficherVoitures.php" class="btn btn-primary">Accéder aux Voitures</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow">
                    <div class="card-body">
                        <h5 class="card-title">Clients</h5>
                        <p class="card-text">Gérez vos clients et leurs locations.</p>
                        <a href="ModelAfficherClients.php" class="btn btn-primary">Accéder aux Clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
