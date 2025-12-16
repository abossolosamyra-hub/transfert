<?php 
// Get Transaction id
if (isset($_GET['transaction_id'])) {
    $transaction_id = htmlspecialchars($_GET['transaction_id'], ENT_QUOTES, 'UTF-8');   
    // Get transaction details from transactions table (sender and receiver info)
    $stmt = $connection->prepare('SELECT * FROM transaction WHERE id_transaction = :transaction_id');
    $stmt->bindValue(':transaction_id', $transaction_id, PDO::PARAM_INT);
    $stmt->execute();
    $transaction = $stmt->fetch(PDO::FETCH_ASSOC);
    $telephoneDestinataire = $transaction['telephone_destinataire'];
    $amount_sent = $transaction['montant'];
    $date_sent = $transaction['date_transaction'];
    // Get receiver details from utilisateur table
    $stmt = $connection->prepare('SELECT * FROM utilisateur WHERE telephone = :telephone');
    $stmt->bindValue(':telephone', $telephoneDestinataire, PDO::PARAM_STR);
    $stmt->execute();
    $receiver = $stmt->fetch(PDO::FETCH_ASSOC);
    $receiver_name = $receiver['nom'];   

    
    
    # code...
}