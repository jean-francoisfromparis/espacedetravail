

<?php 
include'index.php';
?> 






<!-- Ligne de libelle--->
<style>
      .text_white{ color:white;
        font-size:65%;
        font-weight:bold; }
      }
    </style>

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
    <div class="col-sm-1">
     <div class="h-100 p-3 rounded border bg-primary text-white">Valider</div>
    </div>
  </div>
<!--Ligne du formulaire de saisie des prix-->

<form method="post" action="tableaudeprix.php">

<div class="row g-2 mx-1">
    <div class="col-sm-1">

        <input name="ref" type="text" class="form-control" placeholder="" aria-label="Réf">
    </div>
    <div class="col-sm-2">
      <input name="produit" type="text" class="form-control" placeholder=" " aria-label="produit">
    </div>
    <div class="col-sm-1">
        <input name="prixttc" type="text" class="form-control" placeholder="" aria-label="prixttc">
    </div>
    <div class="col-sm-1">
        <!-- <input name="prixht" type="text" class="form-control" placeholder="" aria-label="prixht"> -->
    </div>
    <div class="col-sm-1">
        <!-- <input name="cm" type="text" class="form-control" placeholder="" aria-label="cm"> -->
    </div>
    <div class="col-sm-1">
        <!-- <input name="dispo" type="boolean" class="form-control" placeholder="" aria-label="dispo"> -->
    </div>
    <div class="col-sm">
        <!-- <input name="commentaires" type="text" class="form-control" placeholder="commentaires" aria-label="commentaires"> -->
    </div>
    <div class="col-sm-1">
    <button name="submit" class="btn btn-primary" type="submit">Validez</button>
    </div>
</div>

</form>
<?php


$pdo_object = new PDO("mysql:host=127.0.0.1;dbname=tableaudeprix","root","", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      try 
      {if (!isset ($_POST['submit'])) 
       

      
        //vérifie que les champs sont bien validé.
        if (!isset($_POST['produit'])) throw new exception ("indiquez un nom de produit");
        if (!isset($_POST['prixttc'])) throw new exception ("indiquez un montant de prix valide");
        //vérifie que les formats sont bien respecté.
        $Format_produit = '#^[a-zA-Z0-9áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ\.\_\-\s]{5,60}$#';
        $format_prixttc = '^([0-9]){5}.([0-9]){2}$';
        if(!preg_match($Format_produit , $_POST['produit'])) throw new Exception("Le nom de produit ne convient pas - il doit comporter moins de 60 caractères");
        if(!preg_match($Format_prixttc , $_POST['prixttc'])) throw new Exception("Le format de prix indiqué doit être par exemple : 10.90 pour 10€90");
        //tableau associatif pour requête d'insertion.
        $arr_key_value = array(
          'produit' => $_post['produit'],
          'prixttc' => $_post['prixttc'],);
        //requête d'insertion.
        $SQL_QUERY = "Insert to tabledeprix(produit,prixttc) values(:produit,:prixttc)";
        $_Request= $Pdo_Object->prepare($Sql_Query);
        //Exécution de la requête 
      $_REQUEST -> execute ($arr_key_value);
      }
      catch (Exception $e) { 
        echo $e -> getMessage ();

      }

finally {
  $pdo_object = null;
}?>




</body>
</html>
		