<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
</head>
<body>

<link rel="stylesheet" href="Style/bootstrap.css">
<link rel="stylesheet" href="Style/Style.css">
<?php
include "Pages/bdd/connexion.php";
$page = "Index";
?>

<nav class="nav nav-pills nav-fill card-header dégradé">
    <a href="Pages/accueil.php" class="btn <?php echo $class[0]; ?> nav-item">Accueil</a>
    <a href="Pages/jepropose.php" class="btn <?php echo $class[5]; ?> nav-item">Je propose</a>
    <a href="Pages/jecherche.php" class="btn <?php echo $class[2]; ?> nav-item">je recherche</a>
    
</nav>




<div class="row">
    <div class="col-10">
        
        <div class="card">
            <div class="texte">
                Infos utiles :
            </div>
        </div>
        <div class="card">
            
            <p class="soustexte">
                <a class="btn btn-dark" href="Pages/accueil.php">Retour en haut</a>
            </p>
        </div>
    </div>




<div class='col-2'>

<p> <h1> sidebar</h1>
<?php
    //include "../Parts/Sidebar.php"
?>
</div>






<footer class="card-footer footer">
    <ul class="nav justify-content-center">
<li class="nav-item"> <a href="Pages/accueil.php" class="btn <?php echo $class[0]; ?> nav-item">Accueil</a></li>
<li class="nav-item">   <a href="Pages/jepropose.php" class="nav-link px-2 text-muted<?php echo $class[1]; ?> nav-item">Je propose</a></li>
<li class="nav-item">   <a href="Pages/jecherche.php" class="nav-link px-2 text-muted <?php echo $class[2]; ?> nav-item">je recherche</a></li>


</ul>
    <p class="text-center text-muted"></p>
</footer>
</body>
</html>