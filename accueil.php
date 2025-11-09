
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style-accueil.css" class="rel">
    <title>E-TRANSFERT</title>
</head>
<body>
    <header>
        <h1> E-TRANSFERT</h1>
        <nav>
            <a href="accueil.php">Accueil</a>
            <a href="inscrire.php">Inscription</a>
            <a href="envoyer.php">Mon porte feuille</a>
            <a href="#">Transfert</a>
            </nav>
    </header>
    <main>
    <section class="hero"><br>
       <h2>ENVOYER DE L'ARGENT EN TOUTE SIMPLICITE</h2>
        <p>Transfert rapide,sécurisé et  accessible  partout dans le monde sans déplacement!</p>
        <div class="transfert-services" style="padding: 20px; border-radius: 10px; ">
            <h2>Nos services de transfert</h2>
            <p>Nous offrons des services de transfert d'argent sécurisés et rapides.</p>
            <h2>Transfert d'argent <span id="typed-word"></span></h2>
            <a href="inscrire.php" class=btn>Commencer</a>
        </div>
            <script>
                const mots =["international","national","en ligne","sécurisé"];
                let i = 0;
            function changerMot(){
                document.getElementById("typed-word").textContent = mots[i];
                i = (i + 1) % mots.length;
            }
            setInterval(changerMot,2000);
            window.onload = changerMot;
            </script>
    </section>
    </main>
    <footer>&copy; 2025 E-TRANSFERT.Tous droits réservés.</footer>
</body>
</html>
        