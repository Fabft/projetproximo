<?php
$class = [];
if (isset($page)){
    switch ($page){
        case "Index":
            $class = ["btn-dark","",""];
            break;
        case "jepropose":
            $class = ["","btn-dark",""];
            break;
        case "categ":
            $class = ["","","btn-dark"];
            break;
        }
}


?>

<nav class="nav nav-pills nav-fill card-header dégradé">
    <a href="accueil.php" class="btn <?php echo $class[0]; ?> nav-item">Accueil</a>
    <a href="jepropose.php" class="btn <?php echo $class[5]; ?> nav-item">Je propose</a>
    <a href="jecherche.php" class="btn <?php echo $class[2]; ?> nav-item">Je recherche</a>
    
</nav>
