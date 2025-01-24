
<!DOCTYPE html>
<html lang="en">
<head>
<style>
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: white;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}


</style>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php

require "toConnect.php";
if (isset($_REQUEST['immat']) && !empty($_REQUEST['immat'])){
    $immat=$_REQUEST['immat'];

    if (isset($_REQUEST['marque']) && !empty($_REQUEST['marque']))
        $marque=$_REQUEST['marque'];
    else echo "le champ marque est vide";

    if (isset($_REQUEST['modele']) && !empty($_REQUEST['modele']))
        $modele=$_REQUEST['modele'];
    else echo "le champ modele est vide";

    if (isset($_REQUEST['cylindre']) && !empty($_REQUEST['cylindre']))
        $cylindre=$_REQUEST['cylindre'];
    else echo "le champ cylindre est vide";

    if (isset($_REQUEST['dateA']) && !empty($_REQUEST['dateA']))
        $dateA=$_REQUEST['dateA'];
    else echo "le champ dateAchat est vide";

    $insert="INSERT INTO voiture (immatriculation , marque , Modele , Cylindre , dateAchat) VALUES (?,?,?,?,?)";
    $result = $pdo->prepare($insert);
    $result ->bindParam(1,$immat,PDO::PARAM_STR);
    $result ->bindParam(2,$marque,PDO::PARAM_STR);
    $result ->bindParam(3,$modele,PDO::PARAM_STR);
    $result ->bindParam(4,$cylindre,PDO::PARAM_STR);
    $result ->bindParam(5,$dateA,PDO::PARAM_STR);
    $result->execute();

    ?>
    <div class="alert alert-primary" role="alert">Voiture Ajoutée !</div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="button"><a href="ModelAfficherVoitures.php" >Retour</a></button>
    </div>

<?php
}

else{
    echo "le champ immatriculation est obligatoire !";
}


    

    

?>

</body>
</html>
