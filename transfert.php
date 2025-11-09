<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transfert</title>
</head>
<body>
    <style>
body{
    margin:0;
    padding:0;
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
    background: #f4f6f9;
    display:flex;
    align-items:center;
    justify-content:center;
}
form button {
background-color: #2c3e50;
color:aqua;
padding: 10px 15px;
border: none;
border-radius: 100px;
cursor: pointer;
}
form button:hover{
background-color: #1a25;
}
.input,.checkbox{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:5px;
}
.login-box{
    background-color:rgba(0,0,0,0.75);
    color:white;
    padding:30px;
    width:300px;
    margin:100px auto;
    border-radius:10px;
    box-shadow:0 0 10px black;
}
.login-box input,.login-box button{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:5px;

}
.checkbox{
    posit
}
</style>
<div class="login-box">
    <form>
    <div class="content">
                <div class="quick-transfer">
                    <h3>Transfert rapide</h3>
                    <form method="POST" action="modifier.php">
                    <label> Nom de l'Expediteur</label><input type="text" name="nom_expediteur" placeholder="entrez le nom" required><br>
                    <label> Nom du Destinateur</label><input type="text" name="nom_destinateur" placeholder="nom destinateur" required ><br>
                    <label>Montant</label><input type="number" name="montant" placeholder="saisissez le montant à envoyer" required><br>

                    <select name="type">
                        <option>transfert</option>
                        <option>retrait</option> 
                        <option>dépot</option>                   
                    </select>
                    <select name="statut">
                        <option>Validé</option>
                        <option>Echoué</option>
                        <option>En attente</option>
                    </select>
                    <input type="checkbox">payer le frais de retrait
                    <button type="submit">Suivant</button><br>
    </form>
</body>
</html>