<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
$role = $_POST['role'];
$email =$_POST['email'];
$password = $_POST['password'];
$table = $role == 'admin'? 'admin' : 'user';
$stmt = $pdo->prepare("SELECT * FROM table WHERE email = ?");
$stmt->execute(['email']);
$user= $stmt->fetch();

if($user && password_verify($password,$user['password'])){
session_start();
    $_SESSION['id_utilisateur'] = $user['id'];
    $_SESSION['role'] = $role;
if($role === 'admin'){
    header("Location:dashboard_admin.php");
}else{
    header("Location:accueil.php");
}
    exit();
}else{
    echo "identifiants incorrects";
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <input type="text" name="fakeuser" style="display:none">
     <input type="password" name="fakepass" style="display:none">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-connexion.css" class="rel">
    <title>Formulaire de connexion</title>
</head>
<body>
    <div class="background">
    </div>
        <div class="login-box">
            <h2>Connectez vous</h2>
            <form action="verifierconnexion.php" method="POST"  autocomplete="off">
                <label>Email<label><input type="email" name ="email" placeholder="Email" autocomplete= "off" required><br>  
                <label>mot de passe</label><input type="password" name="password" placeholder="mot de passe" autocomplete= "new-password" required><br>*

                <select name="role">
                    <option value="admin">Administrateur</option>
                    <option value="utilisateur">Utilisateur</option>
                </select>
                <button type="submit" name="se connecter">Se connecter</button>        
            </form>
        </div>
        <script>
            window.addEventListener('DOMContenttLoaded',() => {
                document.querySelector('input[name="email"]').value = "";
                document.querySelector('input[name="password]"').value = "";
            });
        </script>
</body>
</html>