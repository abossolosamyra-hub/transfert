<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard using bootstrap</title>
    <link rel="stylesheet" href="style-envoyer l'argent.css" class="rel">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" class="rel">
</head>
<body>
<div class="sidebar">
    <h2>e-transfert<p>Transferts
         de credit sans stress</p></h2>
    <ul>
        <li><a href="accueil.php" style="text-decoration:none; color:white;">Accueil</a></li> 
        <li><a href="envoyer l'argent.php" style="text-decoration:none; color:white;">Envoyer de l'argent</a></li> 
        <li>Utilisateur</li> 
        <li><a href="historiques transactions.php" style="text-decoration:none; color:white;">Historique des transactions</a></li>
        <li>Statistiques</li> 
        <li>Paramètres</li>
        <li><a href="connexion.php" style="text-decoration:none; color:white;">Déconnexion</a></li>
    </ul>
    </div>
    
    <div class="main">
        <header>
            <input type ="search" name="email" placeholder="Rechercher" style="margin-right:50px;"><span>Admin</span>
            <div class="admin"><br>
            </div>
        </header>
        <h1>Bienvenu Admin</h1>
        <div class="cards">
            <div class="card-blue">
                <p>Utilisateur</p>
                <h2>2</h2>
            </div>
            <div class="card-light">
                <p>Transactions</p>
                <h2>2</h2>
            </div>
            <div class="card-green">
                <p>Montant total</p>
                <h2>35000</h2>
            </div>
            </div>

            <div class="content">
                <div class="quick-transfer">
                    <h3>Transfert rapide</h3>
                    <form method="POST" action="modifier.php">
                    <label>Expediteur</label><input type="text" name="nom_expediteur"><br>
                    <label>Destinateur</label><input type="text" name="nom_destinateur" ><br>
                    <label>Montant</label><input type="number" name="montant"><br>
                    <label>Date</label><input type="date" name="date">

                    <select name="type">
                        <option>transfert</option>
                        <option>retrait</option> 
                        <option>dépot</option>                   
                    </select>
                    <select name="statut">
                        <option>Validé</option>
                        <option>En attente</option>
                        <option>Echoué</option>
                    </select>
        
                    <button type="submit">Mettre à jour</button><br>
                    <button type="submit">Ajouter</button>
                </div>


</body>
</html>