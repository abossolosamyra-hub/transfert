<?php 
$host="localhost";
$username="root";
$password="";
$dbname="money";

try{
    $pdo = new
    PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
    //active les PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    die("Erreur de connexion :". $e->getMessage());
}
?>