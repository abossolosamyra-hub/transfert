<?php
// Sign Up Post Request Handling
if (isset($_POST['signup'])) {
    // Sanitize input data
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $password = password_hash(htmlspecialchars(strip_tags($_POST['password'])), PASSWORD_BCRYPT);

    // Check if phone already exists
    $check = $connection->prepare('SELECT id_utilisateur FROM utilisateur WHERE telephone = :telephone LIMIT 1');
    $check->bindValue(':telephone', $phone, PDO::PARAM_STR);
    $check->execute();
    if ($check->fetch()) {
        $error = 'Phone number already registered.';
    } else {
        // Use prepared statements (PDO) to prevent SQL injection
        $stmt = $connection->prepare('INSERT INTO utilisateur (nom, telephone, mot_de_passe) VALUES (:nom, :telephone, :mot_de_passe)');
        $stmt->bindValue(':nom', $name, PDO::PARAM_STR);
        $stmt->bindValue(':telephone', $phone, PDO::PARAM_STR);
        $stmt->bindValue(':mot_de_passe', $password, PDO::PARAM_STR);
        $stmt->execute();
        // Cookie creation for session management
        $value = (string) $phone;
        $expiry = time() + 24 * 60 * 60; // 1 day

        // Secure flag when using HTTPS
        $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

        // Use options array (PHP 7.3+)
        setcookie(
            'user_id',
            $value,
            [
                'expires'  => $expiry,
                'path'     => '/',
                'secure'   => $secure,
                'httponly' => true,
                'samesite' => 'Lax'
            ]
        );
        // Redirect to dashboard or home page after successful sign-up
        header('Location: ./home.php');
        exit();
    }
}
// Sign In Post Request Handling
if (isset($_POST['signin'])) {
    // Sanitize input data
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $password = htmlspecialchars(strip_tags($_POST['password']));

    // Fetch user data based on phone number
    $stmt = $connection->prepare('SELECT id_utilisateur, mot_de_passe FROM utilisateur WHERE telephone = :telephone LIMIT 1');
    $stmt->bindValue(':telephone', $phone, PDO::PARAM_STR);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['mot_de_passe'])) {
        // Password is correct, create session cookie
        $value = (string) $phone;
        $expiry = time() + 24 * 60 * 60; // 1 day

        // Secure flag when using HTTPS
        $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');

        // Use options array (PHP 7.3+)
        setcookie(
            'user_id',
            $value,
            [
                'expires'  => $expiry,
                'path'     => '/',
                'secure'   => $secure,
                'httponly' => true,
                'samesite' => 'Lax'
            ]
        );
        // Redirect to dashboard or home page after successful sign-in
        header('Location: ./home.php');
        exit();
    } else {
        // Invalid credentials
        $error = 'Invalid phone number or password.';
    }
}
// Send money Post Request Handling
if (isset($_POST['EnvoyerArgent'])) {
    // 1. Sanitize input data
    $recipientPhone = htmlspecialchars(strip_tags(trim($_POST['contact'])));
    $amount = floatval($_POST['amount']);
    // 2. Insert into transactions table
    $stmt = $connection->prepare('INSERT INTO transaction (telephone_expediteur, telephone_destinataire, montant, date_transaction) VALUES (:sender_phone, :recipient_phone, :amount, NOW())');
    $stmt->bindValue(':sender_phone', $phone, PDO::PARAM_STR);
    $stmt->bindValue(':recipient_phone', $recipientPhone, PDO::PARAM_STR);
    $stmt->bindValue(':amount', $amount, PDO::PARAM_STR);
    $stmt->execute();
    // get last insert transaction id
    $transactionId = $connection->lastInsertId();
    // 3. Reduce the user account
    $query = $connection->prepare('UPDATE utilisateur SET solde = solde - :amount WHERE telephone = :telephone');
    $query->bindValue(':amount', $amount, PDO::PARAM_STR);
    $query->bindValue(':telephone', $phone, PDO::PARAM_STR);
    $query->execute();
    // 4. Increase the recipient account
    $query = $connection->prepare('UPDATE utilisateur SET solde = solde + :amount WHERE telephone = :telephone');
    $query->bindValue(':amount', $amount, PDO::PARAM_STR);
    $query->bindValue(':telephone', $recipientPhone, PDO::PARAM_STR);
    $query->execute();
    // 5. Redirect to success page
    header('Location: ./money-sent-successfully.php?transaction_id=' . $transactionId);        
    # code...
}