<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=d
    evice-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-admin.css" class="rel">
    <title>Mon Dashboard</title>
</head>
<body>
   <div class="sidebar">
    <h2>e-transfert<p>Transferts
         de credit sans stress</p>
    </h2>
    <ul>
        <li><a href="admin.php" style="text-decoration:none; color:white;">Accueil</a></li> 
        <li><a href="envoyer l'argent.php" style="text-decoration:none; color:white;">Envoyer de l'argent</a></li> 
        <li><a href="utilisateur.php" style="text-decoration:none; color:white;">Utilisateur</a></li> 
        <li><a href="historiques transactions.php" style="text-decoration:none; color:white;">Historique des transactions</a></li>
        <li><a href="statistiques.php" style="text-decoration:none; color:white;">Statistiques</a></li> 
        <li>Paramètres</li><br><br><br><br><br><br><br>
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
                    <label>Nom envoyeur</label><input type="text" name="nom_envoyeur"><br>
                    <label>Numero envoyeur</label><input type="number" name="numero_envoyeur"><br> 
                    <label>Nom receveur</label><input type="text" name="nom_receveur" ><br>
                    <label>Numero receveur</label><input type="number" name="numero_receveur"><br>
                    <label>Montant</label><input type="number" name="montant"><br>
                    <label>Date</label><input type="date" name="date">

                    <select name="type">
                        <option>retrait</option> 
                        <option>dépot</option>                   
                    </select>
                    <select name="statut">
                        <option>Validé</option>
                        <option>En attente</option>
                        <option>Echoué</option>
                    </select>
        
                    <button type="submit">Modifier</button><br>
                    <button type="submit">Supprimer</button>
                </div>

                <div class="chart">
                    <h3>Statistiques</h3>
                    <!--ici j'aimerais ajouter un graphique-->
                    <img src="image du graphe">
                </div>
            </div>

            <div class="users">
                <h2>Listes des utilisateurs</h2>
                <table><thead>
                        <tr><th>numéros</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Mot de passe</th>
                        <th>Tel</th></tr>
                    </thead><tbody>
                        <?php
                        require "database.php";

                        $sql="SELECT * from utilisateur";
                        $requete = $pdo -> query($sql);

                        $utilisateur = $requete-> fetchALL(PDO::FETCH_ASSOC);

                        foreach ($utilisateur as $utilisateur) {
                            echo"
                            <tr>
                            <td>
                            $utilisateur[ID_UTILSATEUR]
                            </td>
                            <td>
                            $utilisateur[NOM]
                            </td>
                            <td>
                            $utilisateur[ADRESSE]
                            </td>
                            <td>
                            $utilisateur[MOT_DE_PASSE]
                            </td>
                            <td>
                            $utilisateur[NUM_TEL]
                            </td>
                            </tr>

    ";
}




?>
</tbody>
</table>
            <div class="tables">
                <div class="détails">
                    <h3>Dernières transactions</h3>
                    <table><thead>
                        <tr><th>numéros</th>
                        <th>Nom expediteur</th>
                        <th>Nom destinateur</th>
                        <th>Montant</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Statut</th></tr>
                    </thead>
                    <tbody>
                            <?php

                            require "database.php";

                            $sql="SELECT * from transaction ";
                            $requete = $pdo -> query($sql);

                            $transaction = $requete-> fetchALL(PDO::FETCH_ASSOC);

                            foreach ($transaction as $transaction) {
                                echo"
                                   <tr>
                                    <td>
                                        $transaction[ID_TRANSACTION]
                                    </td>
                                    <td>
                                        $transaction[Nom_expediteur]
                                    </td>
                                    <td>
                                        $transaction[Nom_destinateur]
                                    </td>
                                    <td>
                                        $transaction[MONTANT]
                                    </td>
                                    <td>
                                        $transaction[DATE]
                                    </td>
                                    <td>
                                        $transaction[TYPE_VIREMENT]
                                    </td>
                                    <td>
                                        $transaction[STATUT]
                                    </td>
                                   </tr>
                                ";
                            }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>
</html>