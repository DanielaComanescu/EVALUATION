<?php session_start(); ?>
<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Mes choix</title>
         <link rel="stylesheet" href="./css/accueil.css">
         <link rel="stylesheet" href="./css/header.css">
         
     </head>

    <body>
        <?php require_once './templates/header.php' ?>

        <main>
            <h3> Mes choix </h3>
            <br>
                <?php $username = "daniela"; ?>
                <?php $passw = "9876"; ?>

                <?php if(isset($_SESSION['pseudo'])) : ?>
                    <?php echo "Bonjour" ." " . $_SESSION['pseudo'] . " ". "Choissisez une option : " ?>
                        <form action="./controllers/validationChoix.php" method="POST">
                        <h2> Voulez vous choisir une offre personnallisée? : </h2> 
                            <input type="checkbox" id="choix1" name="choix1" value="offre1">
                                <label for="choixOffre1"> Je choisis offre 1 </label>

                            <input type="checkbox" id="choix2" name="choix2" value="offre2">
                                <label for="choixOffre2"> Je choisis offre 2 </label>

                            <br>
                            <br>

                            <button type="submit" class="btn btn-primary">Envoyer mon choix</button>  
                        </form>
  
                    <?php exit(); ?>
        
                <?php endif ?>  
        </main>
    </body>
    </html>