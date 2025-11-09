<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <style>
        body{
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    height: 100vh;
    background: #f4f6f9;
}
.sidebar{
    width: 220px;
    background-color: #2c3e50;
    color: white;
    padding: 20px;
}
.sidebar h2{
    text-align: center;
    margin-bottom: 30px;
}
.sidebar ul{
    list-style: none;
    padding: 0;
}
.sidebar ul li{
    margin: 20px;
}
.sidebar ul li a{
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
}
.sidebar ul li a:hover{
    background-color: #34495e;
}
.main-content{
    flex-grow: 1;
    padding: 30px;
}
header h1{
    margin-bottom: 30px;
    color: #2c3e50;
}
.cards{
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
}
.card{
    flex: 1;
    background-color: white;
    padding: 20px;
    border-left: 5px solid #3498db;
    box-shadow: 0 0 8px rgba(0 0 0 0.1);
}
.card h3{
    margin: 0 0 10px;
    color: #3498db;
}
p{
    font-size: 15px;
    color: #3498db;
}
.recent h2{
    margin-bottom: 15px;
}
span{
    display: flex;
    gap: 5px;
    margin-left: 1000px;
    background: transparent;
}
.tables{
    display: flex;
    gap: 30px;
}
.recent,.details{
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 10px;
}
.recent h3,.details h3{
    margin-bottom: 15px;
}
.recent ul{
    list-style: none;
}.recent ul li{
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}
table{
    width: 100%;
    border-collapse: collapse;
}
thead{
    background: #ecf0f1;
}
th,td{
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid #eee;
}
    </style>
<aside class="sidebar">
        <h2>Dashboard User</h2>
        <ul>
            <li><a href="user.php">Accueil</a></li>
            <li><a href="">Mon compte</a></li>
            <li><a href="#">Transfert</a></li>
            <li><a href="historique.php">Historique</a></li>
            <li><a href="#"> Mon Profil</a></li>
            <li><a href="#">Paramètre</a></li><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <li><a href="accueil.php">Déconnexion</a></li>
        </ul>
    </aside>
    <main class="main-content">
        <header>
            <h1>Bienvenu,Utilisateur</h1><span style="margin-top:10px;">*</span>
        </header>
    <div class="dashboard">
        <section class="recent">
            <h2>Dernières Transactions</h2>
            <div class="tables">
                <div class="détails">
                    <table><thead>
                        <tr><th>numéros</th>
                        <th>Nom expediteur</th>
                        <th>Nom destinateur</th>
                        <th>Montant</th>
                        <th>Type</th>
                        <th>Statut</th></tr>
                    </thead>
                    <tbody>
                            <?php

                            require "database.php";

                            $sql="SELECT * from transaction";
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