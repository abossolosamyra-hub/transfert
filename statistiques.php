<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>statistiques</title>
</head>
<body>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI',sans-serif;
    text-decoration: none;
}


body{
    background:#f5f6fa;
    display: flex;
    min-height: 100vh;
}
.sidebar{
    width: 220px;
    background: #2c3e50;
    color: #fff;
    height: 100vh;
    flex-shrink: 0;
    padding: 20px;
    position: sticky;
    overflow: hidden;
    transition: all 0.5s linear;
}
.sidebar h2{
    text-align: center;
    margin-bottom: 30px;
    font-size: 22px;
    border-bottom:1px solid #fff3;
    padding-bottom:10px;
}
.sidebar ul{
    list-style: none;
}
.sidebar ul li{
    padding:12px 0;
    cursor:pointer;
}
.sidebar ul li:hover{
    background: #34495e;
    padding-left:10px;
    transition:0.5s;
}
.main{
    flex: 1;
    padding: 30px;
}
header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}
header input[type="search"]{
    padding: 8px 12px;
    width: 250px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.admin{
    display: flex;
    align-items: center;
}
.admin img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    margin-left: 10px;
}
h1{
    font-size: 26px;
    margin-bottom: 20px;
}
.cards{
    display: flex;
    gap: 350px;
    margin-bottom: 40px;
}
.card{
    flex: 1;
    padding: 40px;
    border-radius: 10px;
    color: white;
    box-shadow: 0 2px 10px #f0d8d8;
}
.card-blue{
    background: #3498db;
    border: 1px solid #3498db;
    border-radius: 10px;
    box-shadow: 0 0 10px #3498db;

}
.card-blue:hover{
    background:#e2e8ec ;
    cursor: pointer;
}
.card-light{
    background: #9b59b6;
    border: 2px solid #9b59b6;
    border-radius: 10px;
    box-shadow: 0 0 10px #9b59b6;
}
.card-light:hover{
    background:#eadfee ;
    cursor: pointer;
}
.card-green{
    background: #2ecc71;
    border: 2px solid #2ecc71;
    border-radius: 10px;
    box-shadow: 0 0 10px #2ecc71;
}
.card-green:hover{
    background: #b3b8b5;
    cursor: pointer;
}
.content{
    display: flex;
    gap: 30px;
    margin-bottom: 30px;
}
.quick-transfer,.chart{
    flex:1;
    background: white;
    padding: 20px;
    border-radius: 10px;
}
.quick-transfer h3,.chart h3{
    margin-bottom: 15px;
}
.quick-transfer input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
}
.quick-transfer button{
    width: 100%;
    padding: 10px;
    background: #2980b9;
    border:none;
    color: white;
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
}
.quick-transfer button:hover{
    background: #9bd1b2;
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
.ok{
    color: green;
    font-weight: bold;
}
.wait{
    color: orange;
    font-weight: bold;
}
.rechercher, input{
    display: flex;
    gap: 5px;
    margin-right: 20px;
    margin-left: 20px;
    background: transparent;
}
.sidebar p{
    font-size:12px;
}


    </style>
<div class="sidebar">
    <h2>e-transfert<p>Transferts
         de credit sans stress</p></h2>
    <ul>
        <li><a href="accueil.php" style="text-decoration:none; color:white;">Accueil</a></li> 
        <li><a href="envoyer l'argent.php" style="text-decoration:none; color:white;">Envoyer de l'argent</a></li> 
        <li>Utilisateur</li> 
        <li><a href="historiques transactions.php" style="text-decoration:none; color:white;">Historique des transactions</a></li>
        <li><a href="statistiques.php" style="text-decoration:none; color:white;">Statistiques</a></li> 
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

                <div class="chart">
                    <h3>Statistiques</h3>
                    <!--ici j'aimerais ajouter un graphique-->
                    <img src="image du graphe">
                </div>
            </div>
</body>
</html>