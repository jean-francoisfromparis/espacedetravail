<?php 
include'index.php';
?> 
<div class="class row">
      <div class=" col"></div><div class="col"><strong>ID</strong></div> <div class=" col"><strong>PRIX TTC</strong> </div>  <div class="col"><STRONG>PRIX TTC1</STRONG></div> <div class="col"><STRONG>PRIX TTC2</STRONG></div>
</div>
      <br>

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

    $reponse = $dbco -> query ('SELECT id, prixttc FROM tabledeprix');
    
    
    while ($donnees = $reponse -> fetch())
    { ?>
    
    <div class="class row">
        <div class="col">
        </div>
        <div class="col">
            <?php echo $donnees['id'] ?>
        </div> 
        <div class="col">
            <?php echo $donnees['prixttc'] ?> 
        </div>  
        <div class="col">
            <?php $prixttc1 = explode('.',$donnees['prixttc']);
            echo $prixttc1[0] ?>
        </div>
        <div class="col">
            <?php $prixttc2=number_format($donnees['prixttc'],2,'€',',');
            echo $prixttc2?>
        </div> 
      <br>
    </div>
   <?php
    }
   $reponse->closecursor(); 
?>