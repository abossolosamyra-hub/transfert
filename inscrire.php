
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-inscrire.css">
    <title>Formulaire d'inscription</title>
</head>
<body>
        <form method="POST" action="ajouter.php">
            <label>Nom</label><input type="text"  name="nom" placeholder="Nom utilisateur" required><br>
            <label>adresse</label><input type="adresse" name="adresse" placeholder="Adresse" required><br>
            <label>mot de passe</label><input type="password" name="password" placeholder="Password" required><br>
            <label>num_tel</label><input type="num_tel" name="num_tel" placeholder="Num_tel" required>
            <button type="submit">S'inscrire</button>
            <p class="signup-link">Pas de compte?<a href="connexion.php">S'incrire</a></p>
        </form>
    </div>     
</body>
</html>
      
