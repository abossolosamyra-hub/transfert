<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-samyra.css" class="rel">
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css" class="rel">
    <title>document</title>
    <style>
        *{
            margin:0;
        }
        body{
            padding: 20px;
        }
        #togglebtn{
            position:absolute;
            padding: 10px 15px;
            background-color:#3498db;
            color:white;
            cursor:pointer;
            border-radius:6px;
            border:none;
        }
        #togglebtn:hover{
            background-color:#2980b9;
        }
   
        .hide{
            width: 0px;
        }
        nav{
            background-color:aqua;
            color:white;
            overflow: hidden;
            transition:0.4s ease-out;
            width: 200px;
            height:200px;
        }
        nav ul{
            list-style-type:none;
            margin:0;
            padding:30px;        
        }
        nav ul li{
            color:white;
            font-weight:bold;
            font-size:18px
        }

        .hide{
            width:0px;
        }
    </style>
    </head>
    <body>

    <!-- bouton pour afficher/masquer-->
    <button id="toggleBtn">=</button>
    <nav id ="menu">
            <ul>
                <li>Accueil</li> 
                <li>transaction</li> 
                <li>Statistiques</li> 
                <li>Paramètres</li> 
            </ul>
    </nav>

        <!--CONTENU PRINCIPAL-->
        <div class="col main-content p-4">
            <h1>Bienvenue sur le Dashboard</h1>
            <p>Ici se trouve le contenu principal</p>
        </div>
    </div>
</div>

<!--Bootstrap JS-->
<script src="bootstrap\js\bootstrap.bundle.min.js"></script>
<script>
        const toggleBtn = document.getElementById('toggleBtn');
        const menu = document.getElementById('menu');
        toggleBtn.addEventListener('click',()=>{
            menu.classList.toggle('hide');
        });
    
    </script>
</body>
</html>