<?php session_start(); ?>
<!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Me connecter</title>
         <link rel="stylesheet" href="./css/accueil.css">
         <link rel="stylesheet" href="./css/header.css">
         
     </head>

    <body>
        <?php require_once './templates/header.php' ?>

        <main>
            <h1> Me connecter </h1>
            <br>
            
            <form action="controllers/login.php" method="POST">
                <label for="name_id"> Votre identifiant </label> 
                    <input type="text" id="identity" name="name_id" value="Daniela">
                
                <br>
                <label for="password"> Mot de passe </label> 
                    <input type="password" id="pass" name="password" value="9876">
                <br>

                <button type="submit" class="btn btn-primary"> Se connecter </button>
            </form>
        </main>

    </body>
    </html>