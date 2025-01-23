
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

require "toConnectTp4.php";

if (isset($_REQUEST['id']) && !empty($_REQUEST['id'])){
    $id=$_REQUEST['id'];

    if (isset($_REQUEST['nom']) && !empty($_REQUEST['nom']))
        $nom=$_REQUEST['nom'];
    else echo "le champ nom est vide";

    if (isset($_REQUEST['prenom']) && !empty($_REQUEST['prenom']))
        $prenom=$_REQUEST['prenom'];
    else echo "le champ prenom est vide";

    if (isset($_REQUEST['code']) && !empty($_REQUEST['code']))
        $code=$_REQUEST['code'];
    else echo "le champ code est vide";

    if (isset($_REQUEST['local']) && !empty($_REQUEST['local']))
        $local=$_REQUEST['local'];
    else echo "le champ local est vide";

    if (isset($_REQUEST['tel']) && !empty($_REQUEST['tel']))
        $tel=$_REQUEST['tel'];
    else echo "le champ tel est vide";

    if (isset($_REQUEST['mail']) && !empty($_REQUEST['mail']))
        $mail=$_REQUEST['mail'];
    else echo "le champ mail est vide";

    $insert="INSERT INTO client ( IdClient, Nom , Prenom , CodePostal , Localite , Telephone , Email) VALUES (?,?,?,?,?,?,?)";
    $result = $pdo->prepare($insert);
    $result ->bindParam(1,$id,PDO::PARAM_STR);
    $result ->bindParam(2,$nom,PDO::PARAM_STR);
    $result ->bindParam(3,$prenom,PDO::PARAM_STR);
    $result ->bindParam(4,$code,PDO::PARAM_STR);
    $result ->bindParam(5,$local,PDO::PARAM_STR);
    $result ->bindParam(6,$tel,PDO::PARAM_STR);
    $result ->bindParam(7,$mail,PDO::PARAM_STR);
    $result->execute();
    ?>
    <div class="alert alert-primary" role="alert">Client Ajouté !</div>
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="button"><a href="affichageClients.php" >Retour</a></button>
    </div>
    <?php
}

else{
    echo "le champ id est obligatoire !";
}


?>
</body>
</html>