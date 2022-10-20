<!DOCTYPE html>
<?php 
include "bdd/connexion.php";

$req = $bdd->prepare('SELECT * FROM categorie');

$req->execute();
$categs = $req->fetchAll();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proximo - Catégorie recherché</title>
</head>
<body>
<link rel="stylesheet" href="../Style/bootstrap.css">
<link rel="stylesheet" href="../Style/Style.css">
<?php
$page = "categ";
include "../Parts/Header.php"
?>

<banner class="row banner">
    <titre id="banner">Je recherche</titre>
</banner>
<?php
    //récupération dans la bdd de l'ensemble des catégories possibles
    include "bdd/connexion.php";
    if (isset($bdd)) 
    {
                $req = $bdd->prepare('SELECT * FROM categorie order by NomCat');
                $req->execute();
                $categs = $req->fetchAll();
    }
?>



<div class="row">
    <div class="col-10 gradient">
        <div class="row">
            <?php
            
            //echo "<vide class='col-1'></vide>";
           foreach($categs as $uneCateg)
           {
                $idCat=$uneCateg["IdCat"];
                $nomCat=$uneCateg["NomCat"];
                $imageCat='../Style/Images/Categorie/'.$uneCateg["ImageCat"];
              ?>  
                <div class='card col-md-4 border-5 border-dark btn' >
                <?php
                 echo"
                        <a href='annoncesCateg.php?id=$idCat' class='gradient'>
                         <img class='card-img-top' src='$imageCat' alt='Card image cap'>
                         <div class='card-body'><h5 class='card-title'>$nomCat </h5></div>
                         </a>
                ";
                ?>
                </div>
                <?php
           }
            ?>
        </div>
    </div>     
    <div class='col-2'>

        <p> <h1> sidebar</h1>
      <?php
            //include "../Parts/Sidebar.php"
        ?>
    </div>
</div>    
        <?php
        include "../Parts/Footer.php"
        ?>
</body>
</html>
