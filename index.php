<?php session_start(); ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Produits cosmetiques de qualité</title>
         <link rel="stylesheet" href="./css/accueil.css">
         <link rel="stylesheet" href="./css/header.css">
         <link rel="stylesheet" href="./css/footer.css">
         <script src="https://kit.fontawesome.com/3c7f5856f6.js" crossorigin="anonymous"></script>
     </head>


    <body>
        <?php require_once './templates/header.php' ?>
        <main>
            <h1> Accueil </h1>

                <div class="contenuAccueil">
                    <img src="https://bio-avenir.ch/wp-content/uploads/2021/03/BlackRoses-1x100g-2.jpg" >  

                    <p> La Nature a créé tout ce dont les êtres ont besoin pour vivre en harmonie est en bonne santé dans un environnement généreux. Dès la naissance, nous sommes près de la Nature, sa Magie nous émerveille et nous la découvrons chaque jour, avec enchantement. Puis, certains d’entre nous s’éloignent et se rappelle d’elle pendant les vacances, lorsque nous sentons les rayons du soleil sur notre peau ou l’eau salée de la Mer. Et c’est à ce moment-là, débarrassés de nos habits que nous devenons conscients de notre peau. Nous l’observons, comme si c’était une vieille amie que nous n’avons pas vue depuis longtemps, pris dans le tourbillon de la vie.</p> 
                </div>
        </main>
        <?php require_once './templates/footer.php' ?>
     </body>
     </html>
