

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-user.css">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" class="rel">
    <title>Dashboard User</title>
</head>
<body>
    <aside class="sidebar">
    <button id="toggleBtn">=</button>
    <nav id ="menu">
        <h2>Dashboard User</h2>
        <ul>
            <li><a href="user.php">Accueil</a></li>
            <li><a href="compte.php">Mon compte</a></li>
            <li><a href="transfert.php">Envoyer l'argent</a></li>
            <li><a href="historique.php">Historique</a></li>
            <li><a href="#">Mon Profil</a></li>
            <li><a href="#">Paramètre</a></li><br><br><br><br><br>
            <li><a href="accueil.php">Déconnexion</a></li>
        </ul>
    </nav>
    </aside>
    <main class="main-content">
        <header>
            <h1>Bienvenu,Utilisateur</h1><span style="margin-top:10px;"></span>
        </header>
    <div class="dashboard">
        <section class="cards">
            <div class="card">
                <a href="historique.php" style="text-decoration:none;"><h3>Mes transactions</h3></a>
                <p></p>
            </div>
            <div class="card">
                <h3>Solde Principal<br><input type="password" name="password" id="montant" value="00"style="display:none;"><span id="montant_masque">****</span>
                <button id="btn_masque" style="border:5px; bax-shadow:black;">*</button><p>FCFA</P>
            </div>
            
        </section>
        <script src="bootstrap\js\bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById("btn_masque").addEventListener("click",function(){
            var montant = document.getElementById("montant").value;
            var montant_masque = document.getElementById("montant_masque");

            if(montant_masque.textContent ==="****"){
                montant_masque.textContent ="montant";
                document.getElementById("btn_masque").textContent = "00";
            }else{
                montant_masque.textContent = "****";
                document.getElementById("btn_masque").textContent = "*";
            }
        });
        const toggleBtn = document.getElementById('toggleBtn');
        const menu = document.getElementById('menu');
        toggleBtn.addEventListener('click',()=>{
            menu.classList.toggle('hide');
        });
    
    </script>
       
</body>
</html>