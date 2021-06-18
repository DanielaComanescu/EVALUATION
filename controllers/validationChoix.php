<?php session_start(); ?>

    <?php $choix1="offre1"; ?>
    <?php $choix2="offre2"; ?>
    
        <?php if ($_POST["choix1"] === $choix1) { ?>
            <img id="photo1" src="https://bio-avenir.ch/wp-content/uploads/2020/11/serum-ouvert-yellow-flower-cosmoz-1.jpg ">
            <p id="descriptionPhoto1"> Serum au miel bio, 15ml</p>

        <?php } else if ($_POST["choix2"] === $choix2) { ?>
            <img id="photo2" src="https://bio-avenir.ch/wp-content/uploads/2020/08/OIL-CANDLE.jpg">
            <p id="descriptionPhoto2"> Séance massage offerte dans notre institut beauté </p>

        <?php } else if ($_POST["choix1"] === $choix1 && $_POST["choix2"] === $choix2)  { ?>
            <p> "Veuillez choisir une seule option ! " </p>
   
        <?php }; ?>



