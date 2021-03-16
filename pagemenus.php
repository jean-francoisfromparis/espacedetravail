<html>
 <head>
 <title>Page des Menus</title>
 </head>
<?php
include'navbar.php';
?>
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
    }

</style>
<body>
<div class="row" style="height: 6vh"></div>
    <div class="row justify-content-center">
        <div class="cardmenumax border-dark mr-5 mb-3 col-3 text-center" style="background-color: rgba(228,217,194,0.8);">
            <div class="card-body">
                <img src="image/image brute/Menu Max/MENU MAX.png">
                <h1 class="card-title text_white mt-3">Menu Max</h1>
                <p class=" text_white mt-3">Vous pouvez prendre l'avantage en commandant une pizza Dino (ou un plat de pâtes) plus une boisson plus un dessert</p>
                <div class="col">
                    <a class="text_white hover_lightwhite" style=" font-size: 3vh; font-weight: bold;"> Prix : 19&nbsp;<sup>€</sup>99</a>
                <a href="pagepizza.php" class="btn text_white hover_lightwhite font-weight-bold " style="background-color: rgba(201, 46, 46, 0.7); width:11vw;">
                    <img src="./image/boutton/add_shopping_cart-white-18dp.svg" class="mr-2" style="height: 40px; width: 40px;"> commander</a>
                </div>
            </div>
        </div>
    

        <div class="cardmenumoy border-dark mr-5 mb-3 col-3" style=" background-color: rgba(228,217,194,0.8);">
            <div class="card-body text-center">
                <img src="image/image brute/Menu Moyen/MENU moyen.png">
                <h1 class="card-title text_white mt-3">Menu Moyen</h1>
                <p class="text_white mt-3 ">Vous pouvez également commander une pizza Dino (ou un plat de pâtes) et une boisson</p>
                <div class="col">
                    <a class="text_white hover_lightwhite mr-2 " style="font-size: 3vh; font-weight: bold;"> Prix : 16&nbsp;<sup>€</sup>99</a>
                <a href="pagepizza.php" class=" btn text_white hover_lightwhite font-weight-bold ml-2" style="background-color: rgba(201, 46, 46, 0.7); width:11vw;">
                    <img src="./image/boutton/add_shopping_cart-white-18dp.svg" class="mr-2" style="height: 40px; width: 40px;"> commander</a>
                </div>
            </div>
        </div>
        <div class="cardjuplat border-dark mr-5 mb-3 col-3" style=" background-color: rgba(228,217,194,0.8);">
            <div class="card-body text-center">
                <img src="image/image brute/Menu Moyen/juste un plat.png">
                <h1 class="card-title text_white mt-5">Juste un Plat</h1>
                <p class="text_white mt-4 ">Juste un plat !! C'est également une possible</p>
              
                    <a href="pagepizza.php" class="btn text_white hover_lightwhite font-weight-bold mt-5" style="background-color: rgba(201, 46, 46, 0.7); ">
                        <img src="./image/boutton/add_shopping_cart-white-18dp.svg" class="mr-2" style="height: 40px; width: 40px;"> commander</a>
            </div>
        </div>
</div>
</body>
</html>