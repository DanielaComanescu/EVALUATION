<?php session_start(); ?>
<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Page contenu privé</title>
         <link rel="stylesheet" href="./css/header.css">
         <link rel="stylesheet" href="./css/footer.css">
         <link rel="stylesheet" href="./css/pageContenuPrivé.css">
     </head>

     <body>
        <?php require_once './templates/header.php' ?>

    <?php if (isset($_SESSION['pseudo'])) :  ?>
        <main class="contenu">
            <br>
            <br>
           
            <h2> <?php echo "Bonjour " . $_SESSION["pseudo"]; ?> </h2>
            <h3> Ne ratez pas l'offre promotionnelle pour vous </h3>
                <div class="offres">
                    <div class="offre1">
                        <img id="photo1" src="https://bio-avenir.ch/wp-content/uploads/2020/11/serum-ouvert-yellow-flower-cosmoz-1.jpg ">
                        <p id="descriptionPhoto1"> Serum au miel bio, 15ml</p>
                    </div>

                    <div class="offre2">
                        <img id="photo2" src="https://bio-avenir.ch/wp-content/uploads/2020/08/OIL-CANDLE.jpg">
                        <p id="descriptionPhoto2"> Séance massage offerte dans notre institut beauté </p>
                    </div>
                </div>
        </main>

    <?php else : ?>
        <main class="elsePasConnecté">
            <br>
            <p> Veuillez entrer vos identifiants pour acceder à cette page </p>
            <br>
            <p> Cliquez sur le lien en bas pour vous connecter ou sur le bouton du menu </p> 
            <p> <a href="meconnecter.php">Me connecter</a>  </p>
            </main>

    <?php endif ?>
    <?php require_once './templates/footer.php' ?>
    </body>
    </html>