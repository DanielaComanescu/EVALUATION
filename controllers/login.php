<?php session_start(); 

$users = [
    [
        "name_id" => "Daniela",
        "password" => "1234"
    ],
    [
        "name_id" => "Celine",
        "password" => "moiCeline" 
    ],
    [
        "name_id" => "Edy",
        "password" => "moiEdy"
    ],
    [
        "name_id" => "Thomas",
        "password" =>"moiThomas"
    ],   
    ];

    foreach ($users as $user) {
        if($_POST["name_id"] === $user["name_id"] && $_POST["password"] === $user["password"])  {
            $_SESSION["pseudo"] = $_POST["name_id"];
            header("Location: /formulaireParametrages.php");
            exit();
        }
        }
            header("Location: /meconnecter.php");
            exit(); 
    
       