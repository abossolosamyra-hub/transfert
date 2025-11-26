
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BankuX - PWA HTML Template</title>
    <script src="https://unpkg.com/@phosphor-icons/web@2.1.1"></script>
    <link rel="manifest" href="./manifest.json" />
    <link
      rel="shortcut icon"
      href="./assets/images/favicon.ico"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/css/swiper.min.css" />
  <link href="assets/css/index.css" rel="stylesheet"></head>
  <body class="">
    <!-- Splash Screen Start -->
    <div class="preloader inset-0 z-50 hidden">
      <div
        class="h-full bg-bgColor flex flex-col justify-center items-center text-center container"
      >
        <div class="zoomInOut">
          <div class="">
            <img src="./assets/images/logo.png" alt="" />
          </div>
          <p class="pt-6 text-4xl font-bold text-n900">
            Banku<span class="text-g300">X</span>
          </p>
        </div>
      </div>
    </div>
    <!-- Splash Screen End -->
     <style>
      body{
    font-family: 'segoe UI', sans-serif;
    color: #222;
    margin: 0;
    padding:0;
    background-image: url('yes.jpeg');
    position:relative;
    background-position:center;
    background-size:cover;
    background-repeat:no-repeat;
    border: 10px solid #fff;
    opacity: 0.85;
}
.overlay{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgba(0,0,0,0.5);
    z-index: 1;
}
html{
    scroll-behavior:smooth;
}
nav{
        width: 100%;
        height: 30px;
        padding: 10px;
        border-radius: 8px;
        padding: 10px 8%;
        border-radius: 20px;
        overflow: hidden;
        max-height: 300px;
        transition:background-color 0.2s ease,color 0.2s ease;
        border-radius: 5px;
        transform: translateY(-2px) scale(1.03);
        box-shadow:0 0 10 rgb(0,0,0,0.5);
}
nav a{
        margin-right:280px;
        text-decoration:none;
        color:rgb(22, 21, 21);
        border-radius: 5px;
        margin-top: 20px;
        font-size: 20px;
    }
    nav a:hover {
        font-size:19px;
        font-weight:normal;
        color:rgb(247, 250, 250);
        background: rgb(75, 105, 78);
        border-radius: 5px;
        padding: 12px 15px;
        text-decoration: none;

    }
    p{
        font-size: 50px;
        color: #f5fbfc;
        font-family: Georgia, 'Times New Roman', Times, serif;
    }
    h2{
        font-size: 28px;
        color: #f2fafa;
    }
    h1{
        text-align: center;
        color:transparent;
        font-size: 5rem;
        transform: translate(1%,2%);
        font-family: sans-serif;
        -webkit-text-stroke: 2px #fff;
        cursor: pointer;
        animation: slideIn 0.2s ease-out forwards;
    }
    h1:hover{
        color: #474646;
        -webkit-text-stroke: 0;
    }
    @keyframes slideIn {
        from{
            transform: translateY(-50px);
            opacity: 0;
        }
        to{
            transform: translateY(0);
            opacity: 1;
        }
    }
.hero{
   text-align: center;
   padding: 80px 20px;
}
.hero h2{
    font-size: 36px;
}
.hero p{
    font-size: 18px;
    margin-top: 10px;
}
#typed-word{
    color: #007bff;
    font-weight: bold;
    transition: all 0.5s ease-in-out;
}
.btn{
    display: inline-block;
    margin-top: 40px;
    padding: 12px 25px;
    background: #0077cc;
    color:white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.btn:hover{
    background:rgb(191, 229, 134);
    cursor: pointer;
}
footer{
    text-align: center;
    padding: 15px;
    margin-top: 250px;
    background: #333;
    color:white;
    margin-bottom: 0;
}
.a{
  display: inline-block;
    margin-top: 40px;
    padding: 12px 25px;
    background: #0077cc;
    color:white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.a:hover{
  background:rgb(191, 229, 134);
    cursor: pointer;
}
     </style>
     <a href="./sign-up.php">s'inscrire</a>
     <section class="hero"><br>
       <h2>ENVOYER DE L'ARGENT EN TOUTE SIMPLICITE</h2>
        <p>Transfert rapide,sécurisé et  accessible  partout dans le monde sans déplacement!</p>
        <div class="transfert-services" style="padding: 20px; border-radius: 10px; ">
            <h2>Nos services de transfert</h2>
            <p>Nous offrons des services de transfert d'argent sécurisés et rapides.</p>
            <h2>Transfert d'argent <span id="typed-word"></span></h2>
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

    <!-- ======Javascript Dependencies -->
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="./assets/js/plugins/plugin-custom.js"></script>
  <script defer src="index.js"></script></body>
</html>
