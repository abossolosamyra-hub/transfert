<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisaeur</title>
</head>
<body>
    <style>
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


    </style>
<div class="users">
                <h2>Listes des utilisateurs</h2>
                <table><thead>
                        <tr><th>Nom</th>
                        <th>Adresse</th>
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
                            $utilisateur[NOM]
                            </td>
                            <td>
                            $utilisateur[ADRESSE]
                            </td>
                            <td>
                            $utilisateur[NUM_TEL]
                            </td>
                            </tr>

    ";
}




?>
</body>
</html>