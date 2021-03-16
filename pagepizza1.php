<html>
 <head>
 <title>Page des Pizza</title>
 </head>
<?php
include'navbar.php';
?>
<Script>
$("#staticBackdrop<?php echo $donnees['id'];?>") click( function(){
          $("#staticBackdrop<?php echo $donnees['id'];?>")show (100);)
        }
</Script>
<style>
    body 
    {
    background-image: url("./image/pizza.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    font-family: lora;
  
    z-index: 1;
    }
    .text_white
    { 
        color:white;
        text-decoration:none;
    }
    a.hover_lightwhite:hover
    {
        color:rgb(247, 215, 215);    
    }
    p
    {
        text-align:justify;
        font-size: 3vmin;
        color:#c92e2e;
    }
    p:hover
    {
        text-align:justify;
        font-size: 3.2vmin;
        color:#c92e2e;
    }
    
</style>
<div class="container"> 
       <div class="row">
            <div class="col-lg-1"><p class="text-center"></p></div>
            <div class="col-lg-10 text_white hover_lightwhite "><h1 class="text-center" style="font-size:9vh">Choisissez votre Pizza</h1></div>    
            <div class="col-lg-1"><p class="text-center"></p></div>  
        </div>
    </div>

  <!--Groupe de bouton pour les pizza--> 
  <div class="container">
      <div class="row col-8">
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

    $reponse = $dbco -> query ('SELECT *  FROM `tabledeprix` WHERE `famille` LIKE \'pizza\';');
       $donnees = $reponse -> fetchall();
       foreach($donnees as $donnee):
       
    { ?>



<!--Déclaration de chaque bouton-->
<form method="post" action="pagepizza1.php" class="col-4">

      <button onclick="clicked(this);"  name="submit" type="submit" style="background-color:#ffffff; width: 15vw; height:17vh"class="btn text_color text-right m-2" data-toggle="modal" data-target="#staticBackdrop<?php echo $donnee['id'];?>" 
      data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo $donnee['descr'];?>">
        <img name="<?php echo $donnee['id']?>" src="<?php $image1=$donnee['image'];echo $image1?>" style="width: 5vw;height: 5vh; float: left;margin-top: 3vh;" alt="Pizza">
        <p class="text-right" ><strong><?php $produit1=substr_replace($donnee['produit'], '', 0, 5);echo $produit1 ?></strong></p> 
        <p class=" text-right mb-sm-2"><strong>
        <?php $prixttc1=number_format($donnee['prixttc'],2,'€',',');echo $prixttc1?></strong></p>
        <p><?php $descr1=$donnee['descr'];?> </p>
        </button>
        
</form> 
<?php 
    } endforeach;
if (isset($_post['submit'])){
?>
<!-- Modal -->
<div class="modal" id="staticBackdrop<?php echo $donnee['id'];?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <img src="<?php $image1=$donnee['image'];echo $image1?>" style="width: 8vw;height: 6vh; float: left; margin-top: 1vh;" alt="Pizza">
        <h5 class="modal-title" id="staticBackdropLabel"><strong><?php $produit1=substr_replace($donnee['produit'], '', 0, 5);echo $produit1 ?></strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p><?php echo $donnee['descr'];?> </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>



<?php
}
   $reponse->closecursor();
 
   
?>


<Script>
$("#staticBackdrop<?php echo $donnees['id'];?>") click( function(){
          $("#staticBackdrop<?php echo $donnees['id'];?>")show (100);)
        }
</Script>



 </div>  
</div>


</html>