<?php
require_once 'database.php';

$email = $_POST['email'];
$pass = $_POST['password'];
$role = $_POST['role'];
 if($role == "admin"){
    $sql = "SELECT * FROM admin where email_admin = :email_admin";

    $stmt = $pdo->prepare($sql);
    
    $stmt ->execute([
    'email_admin' => $email
    ]);
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    if($resultat && $resultat['MOT_DE_PASSE']==$pass){
        
        echo "
            <script>
                alert('connexion reussie');
                window.location.href = 'admin.php';
            </script>
        ";
    }else{
        die("utilisateur ou mot de passe incorrect ");
    }

 }else{
    $sql = "SELECT * FROM utilisateur where adresse = :adresse";

    $stmt = $pdo->prepare($sql);
    
    $stmt ->execute([
    'adresse' => $email
    ]);
    $resultat = $stmt->fetch(PDO::FETCH_ASSOC);
    if($resultat && $resultat['MOT_DE_PASSE']==$pass){
        
        echo "
            <script>
                alert('connexion reussie');
                window.location.href = 'user.php';
            </script>
        ";
    }else{
        die("utilisateur ou mot de passe incorrect ");
    }
 }



?>