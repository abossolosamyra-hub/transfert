<?php
require_once 'database.php';
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $identifiant= $_POST['identifiant'];
    $nom_expediteur = $_POST['nom_expediteur'];
    $nom_destinateur = $_POST['nom_destinateur'];
    $montant = $_POST['montant'];
    $date = $_POST['date'];
    $type = $_POST['type'];
    $statut = $_POST['statut'];

    $stmt = $pdo->prepare("INSERT INTO transaction(ID_TRANSACTION,Nom_expediteur,Nom_destinateur,MONTANT,DATE,TYPE_VIREMENT,STATUT) VALUES(?,?,?,?,?,?,?)");
    if($stmt->execute([$identifiant,$nom_expediteur,$nom_destinateur,$montant,$date,$type,$statut])){
        header("Location: admin.php?message=transaction_ajouter");
        exit();
    }
    else{
        echo "Transaction echoué";
    }
}
?>

