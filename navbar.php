<?php 
include'index.php';
?> 
<style>
    .text_nav
        { 
            font-family: 'lora';
            font-size: 5vh;
            font-weight: 700;
            color:white;
        }
        .text_nav1
        { 
            font-family: 'lora';
            font-size: 2vh;
            font-weight: 300;
        }
    a.text_nav:hover
      {
        color:rgb(247, 215, 215);
      }
</style>

<nav class="navbar navbar-expand-lg sticky-top" style="background-color:#c92e2e; height:15vh; ">
  <div class="container-fluid">
    <a class="navbar-brand" href=".\pageaccueil.php"><img src=".\image\logo2.png" ></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text_nav mr-5 " aria-current="page" href=".\pageaccueil.php">Accueil</a>
        <a class="nav-link text_nav mx-3 " href=".\pagemenus.php">Menus</a>
        <a class="nav-link text_nav mx-3 " href=".\pagepizza.php">Pizza</a>
        <a class="nav-link text_nav mx-3 " href="#">Pâtes</a>
        <a class="nav-link text_nav mx-3 " href="#">Boissons</a>
        <a class="nav-link text_nav mx-3 " href="#">Desserts</a> 
      </div>
    </div>
  </div>
</nav>


<footer>
<nav class="navbar navbar-expand-lg fixed-bottom" style="background-color:#c92e2e; height:5vh; ">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active text-white text_nav1 mr-5 mt-2" aria-current="page" href="#">&copy</a>
        <a class="nav-link text-white text_nav1 mx-3 mt-2" href="#">Jean-François LEPANTE</a>
        <a class="nav-link text-white text_nav1 mx-3 mt-2" href="#">&#160 Nous vous remercions pour votre confiance</a> 
        <a class="nav mt-2 ml-5" href="#"><img src=".\image\configuration.gif"></a>  
    </div>
    </div>
  </div>
</nav>
</footer>



