<div class="col-2 card-footer">    
<?php
            
                $reqSB = $bdd->prepare('SELECT * FROM categorie');
                $reqSB->execute();
                $categsSB = $reqSB->fetchAll();
          ?>
          
          
    <nav class='row'>
        <p class='desci'>Liste des  différentes catégories :</p>

        <?php
            foreach ($categsSB as $categSB){
                $idCategSB = $categSB["IdCat"];
                echo "<a type='button' class='col-12 btn btn-outline-light' href='../Pages/annoncesCateg.php?id=$idCategSB'>"; echo $categSB["NomCat"]; echo "</a>";
            }
            
       ?>
    </nav>

</div>











