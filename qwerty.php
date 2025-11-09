<?php
require_once 'database.php';

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$password = $_POST["password"];
$num_tel = $_POST["num_tel"];

//requete preparee avec PDO
$sql = "INSERT into utilisateur VALUES(:id_utilisateur, :nom, :prenom,:adresse,:mot_de_passe,:num_tel)";

$stmt = $pdo->prepare($sql);

$insertion = $stmt -> execute([

'id_utilisateur' => null,
'nom' => $nom,
'prenom' =>$prenom,
'adresse' => $adresse,
'mot_de_passe' => $password,
'num_tel' =>$num_tel

]);

if($insertion){
    echo "
        <script>
            alert('inscription reussie');
            window.location.href = 'connexion.php';
        </script>
        ";
 }else{ 
    die("erreur d'insertion : ". $e->getMessage());
}
?>