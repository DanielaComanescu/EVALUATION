<?php session_start(); 

$username = "Daniela";
$passw = "9876";

if($_POST["name_id"] === $username && $_POST["password"]  === $passw) {
    $_SESSION["pseudo"] = $_POST["name_id"];
    header("Location: /formulaireParametrages.php");
    exit();
} else {
    header("Location: /meconnecter.php");
    exit(); 
}  