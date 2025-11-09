<?php
if (!empty($_COOKIE['user_id'])) {
    $phone = (string) $_COOKIE['user_id'];
    $phone = trim($phone);
    // Allow digits, plus, spaces and hyphen; remove other chars
    $phone = preg_replace('/[^\d\+\-\s]/', '', $phone);
    // get user data from database
    $stmt = $connection->prepare('SELECT * FROM utilisateur WHERE telephone = :telephone LIMIT 1');
    $stmt->bindValue(':telephone', $phone, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        // User is authenticated
        $userName = htmlspecialchars($user['nom'], ENT_QUOTES, 'UTF-8');
        $userPhone = htmlspecialchars($user['telephone'], ENT_QUOTES, 'UTF-8');
         $userAccount = htmlspecialchars($user['solde'], ENT_QUOTES, 'UTF-8');
        // You can now use $userName and $userPhone in your application
        return;
    }
}

header('Location: ./sign-in.php');
