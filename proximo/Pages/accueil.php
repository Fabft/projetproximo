<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

<link rel="stylesheet" href="../Style/bootstrap.css">
<link rel="stylesheet" href="../Style/Style.css">
<?php
include "bdd/connexion.php";
$page = "Index";
include "../Parts/Header.php";
?>


<div class="row">
    <div class="col-10">
        
        <div class="card">
            <div class="texte">
                Infos utiles :
            </div>
        </div>
        <div class="card">
            
            <p class="soustexte">
                <a class="btn btn-dark" href="accueil.php">Retour en haut</a>
            </p>
        </div>
    </div>

    <div class='col-2'>

<p> <h1> sidebar</h1>
<?php
    //include "../Parts/Sidebar.php"
?>
</div>
<?php
include "../Parts/Footer.php";
?>
</body>
</html>