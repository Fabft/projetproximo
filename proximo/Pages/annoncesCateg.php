<!DOCTYPE html>
<?php
include "bdd/connexion.php";
// récupération de la catégorie cliquée
$idChoixCateg = $_GET['id'];


$req = $bdd->prepare("SELECT * FROM categorie where IdCat = $idChoixCateg");
$req->execute();
$categorie= $req->fetch();
$nomCateg= $categorie["NomCat"]; 
$imageCat='../Style/Images/Categorie/'.$categorie["ImageCat"];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catégorie choisie <?php echo $nomCateg ?></title>
</head>
<body>

<link rel="stylesheet" href="../Style/bootstrap.css">
<link rel="stylesheet" href="../Style/Style.css">
<?php
$page = "categ";
include "../Parts/Header.php";
?>

<div class="row banner">
    <titre id="banner"><?php echo $nomCateg; ?></titre>
</div>

<!-- ******************  les annonces de la catégorie -->

<div class="row">
    <div class="col-10 dégradé2">

        <h1>Voici les annonces en cours de développement</h1>
    </div>
    <?php 
    include "../Parts/Sidebar.php";
    ?>
</div>

<?php
include "../Parts/Footer.php";
?>
</body>
</html>
