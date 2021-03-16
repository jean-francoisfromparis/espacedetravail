

<?php 
include'index.php';
?> 

<!-- Ligne de libelle--->
<body style=background-color:black;>
  <style>
      .text_white
      { color:white;
        font-size:65%;
        font-weight:bold; 
      }
      .text_black
      {
        color:black;
        font-size:80%
      }
  </style>

  
<section> <!--récupération des données de la base de données-->
  <h1 class="strong text-white">Tableau de prix</h1>

  <div  style="min-height: 30px;" class=" row g-2  mb-2 mx-1">
      <div class="col-sm-1">
      <div class=" h-100 p-3 rounded border bg-primary text-white "> <strong>Réf</strong>   </div>
      </div>
      <div class=" col-sm-2">
        <div class="h-100 p-3 rounded border bg-primary text-white"><strong>Produit</strong> </div>
      </div>
      <div class=" col-sm-1">
      <div class="h-100 p-3  rounded border bg-primary text_white"> Prix TTC </div>
      </div> 
      <div class="col-sm-1">
      <div class="h-100 p-3 rounded border bg-primary text_white">Prix HT</div>
      </div>
      <div class="col-sm-1">
      <div class="h-100 p-3 rounded border bg-primary text_white"> Coût Matière </div>
      </div>
      <div class="col-sm-1">
      <div class="h-100 p-3 rounded border bg-primary text-white"><strong>Dispo</strong></div>
      </div>
      <div class="col-sm">
      <div class="h-100 p-3 rounded border bg-primary text-white">Commentaires</div>
      </div>
    </div>



<?php
$serveur = "localhost";
$dbname = "tableaudeprix";
$user = "root";
$pass = "";

try
{
    //On se connecte à la BDD
    $dbco = new PDO("mysql:host=$serveur;dbname=$dbname;charset=utf8",$user,$pass);
    $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch (Exception $e)
{
      die('erreur :' .$e ->getmessage());
}

    $reponse = $dbco -> query ('SELECT * FROM tabledeprix');
    while ($donnees = $reponse -> fetch())
    {?>
      <div class="row g-2 mx-1">
        <div class="col-sm-1">
            <div class="border rounded p-3 strong text-black text-start" style="background-color:white; "><?php echo $donnees['id'];?></div>
        </div>
        <div class="col-sm-2 ">
          <div class=" h-100 p-3 rounded border text-black text-start" style="background-color:white; "><?php echo $donnees['produit'];?></div> 
        </div>
        <div class="col-sm-1">
          <div class=" h-100 p-3 rounded border text-black text-start"  style="background-color:white; "><?php echo $donnees['prixttc'];?></div>
        </div>
        <div class="col-sm-1">
          <div class=" h-100 p-3 rounded border text-black text-start"  style="background-color:white; "><?php echo round($donnees['prixttc']/(1+0.2),2);?></div>
        </div>
        <div class="col-sm-1">
          <div class=" h-100 p-3 rounded border text-black text-start"  style="background-color:white; "><?php echo round((($donnees['prixttc']*0.22)/(1+0.2)),2);?></div>
        </div>
        <div class="col-sm-1">
          <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked>
        <label class="form-check-label text-white " for="defaultCheck1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Le message affiché sur le bouton du produit sera le suivant : 'victime de son succès ce produit reviendra bientôt !!'">
            Dispo
        </label>
          </div>
        </div>
        <div class="col-sm">
          <div class=" h-100 p-3 rounded border text_black text-start"  style="background-color:white; "><?php echo $donnees['commentaire'];?></div>
        </div>
      
      </div>

<?php
   }
   $reponse->closecursor(); 
?>
</section>



</body>
		